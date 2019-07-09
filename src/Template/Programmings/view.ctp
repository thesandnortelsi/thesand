<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programming $programming
 */
?>

<style type="text/css">
.outer{
    overflow-y: auto;
    height:500px;
    }

.outer table{
    /*width: 100%;*/
    width: 2500px !important
    table-layout: fixed; 
    border : 1px solid black;
    border-spacing: 1px;
}

.outer table th {
        text-align: left;
        top:0;
        position: sticky;
}
</style>

<ul class="breadcrumb">
    <li>
      <p>MANTENIMIENTO</p>
    </li>
    <li><?= $this->Html->link('Mantenimientos Preventivos', ['controller' => 'Programmings', 'action' => 'index'], ['class' => 'active']) ?></li>
    </ul>
    <div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Ver - <span class="semi-bold">Programación de Mantenimiento Preventivo</span></h3>
    </div>
    <div class="row">
    <div class="col-md-12">
      <div class="grid simple form-grid">
        <div class="grid-title no-border">
          <!-- <h4>Traditional <span class="semi-bold">Validation</span></h4> -->
          <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#grid-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
          </div>
        </div>
        <div class="grid-body no-border">

            <div class="col-md-12">
              <ul class="nav nav-tabs" role="tablist">
              
              <?php if (!empty($inicio_semana) && !empty($fin_semana))
              {?>
                <li class="active">
                  <a href="#tab1hellowWorld" role="tab" data-toggle="tab">Programación de la semana</a>
                </li>
              <?php } ?>

              <?php if (!empty($dias_mes) && !empty($data_meses)) 
              {?>
                <li>
                  <a href="#tab1FollowUs" role="tab" data-toggle="tab">Programación del mes</a>
                </li>
              <?php } ?>

                <li>
                  <a href="#tab1Inspire" role="tab" data-toggle="tab">Programación del año</a>
                </li>


              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab1hellowWorld">
                  <div class="row column-seperation">
                    <div class="col-md-12">
                      <h3 class="semi-bold">Semana: <?= date("W") ?> del <?= $anio ?></h3>
                     
                        <div class="row">
                            <div class="col-md-12">
                              <div class="table-responsive">
                                  <div class="outer">
                                    <table class="table table-bordered no-more-tables table-condensed">
                                      <thead>
                                        <tr>
                                          <th class="text-center">Código</th>
                                          <th class="text-center">Máquina</th>
                                          <th class="text-center">Horas Faltantes</th>
                                          <th class="text-center">Días Faltantes</th>
                                          <?php
                                              $date = $inicio_semana;

                                              // $semana = array();

                                              while($date <= $fin_semana)
                                              {
                                                  // array_push($semana, $date);
                                                  ?>
                                                  

                                                  <th><?= $date ?></th>                                                

                                                  <?php
                                                  $date = date("Y-m-d", strtotime($date."+ 1 days"));
                                              }
                                          ?>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        
                                          <?php
                                          foreach ($machines as $machine) 
                                          {                                            
                                              ?>
                                              <tr>
                                                  <td class="text-left"><?= $machine['code'] ?></td>
                                                  <td class="text-left"><?= $machine['name'] ?></td>
                                                  <td class="text-left"><?= $machine['hour_left'] ?></td>
                                                  <td class="text-left"><?= $machine['day_left'] ?></td>

                                          <?php
                                              
                                              $date = $inicio_semana;
                                                  
                                                  while($date <= $fin_semana)
                                                  {
                                                    $espacio = 0;
                                                      foreach ($data_anio as $row)
                                                      {                                                    
                                                          if($machine['id'] == $row->machine_id && date("Y-m-d", strtotime($row->date)) == $date)
                                                          {
                                                              $espacio = 1;
                                                              echo "<td>Mantto ".($machine['value'] * $row->position)."</td>";
                                                          }
                                                      }
                                                      if ($espacio == 0) 
                                                      {
                                                        echo "<td>-</td>";
                                                      } 
                                                      $date = date("Y-m-d", strtotime($date."+ 1 days"));
                                                  }
                                              
                                              ?>
                                              </tr>

                                          <?php                                            
                                          }

                                          ?>                                  
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                            </div>
                        </div>

                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab1FollowUs">
                  <div class="row">                   

                            <div class="col-md-12">
                              <h3 class="semi-bold">Mes: <?= date("M") ?> del <?= $anio ?></h3>

                              <div class="table-responsive">
                                  <div class="outer">
                                    <table class="table table-bordered no-more-tables table-condensed">
                                      <thead>
                                        <tr>
                                          <th class="text-center">Código</th>
                                          <th class="text-center">Máquina</th>
                                          <th class="text-center">Horas Faltantes</th>
                                          <th class="text-center">Días Faltantes</th>
                                          <?php
                                          
                                          array_unique($dias_mes);asort($dias_mes);
                                              
                                          for ($i=0; $i < count($dias_mes); $i++)
                                          {
                                              ?>

                                              <th><?= $dias_mes[$i] ?></th>                                                

                                              <?php
                                          }
                                          ?>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        
                                        <?php
                                          foreach ($machines as $machine) 
                                          {                                            
                                              ?>
                                              <tr>
                                                  <td class="text-left"><?= $machine['code'] ?></td>
                                                  <td class="text-left"><?= $machine['name'] ?></td>
                                                  <td class="text-left"><?= $machine['hour_left'] ?></td>
                                                  <td class="text-left"><?= $machine['day_left'] ?></td>

                                          <?php
                                          
                                                  
                                                  for ($i=0; $i < count($dias_mes); $i++)
                                                  {
                                                    $espacio = 0;
                                                      foreach ($data_meses as $row)
                                                      {
                                                        
                                                          if($machine['id'] == $row->machine_id && date("Y-m-d", strtotime($row->date)) == $dias_mes[$i])
                                                          {
                                                              echo "<td>Mantto ".($machine['value'] * $row->position)."</td>";
                                                              $espacio = 1;
                                                          }
                                                      }
                                                      if ($espacio == 0) 
                                                      {
                                                        echo "<td>-</td>";
                                                      }                                                      
                                                  }
                                              
                                              ?>
                                              </tr>

                                          <?php                                            
                                          }

                                          ?>
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="tab-pane" id="tab1Inspire">
                  <div class="row">                   

                            <div class="col-md-12">
                              <h3 class="semi-bold">Año: <?= $anio ?></h3>
                              <div class="table-responsive">
                                  <div class="outer">
                                    <table class="table table-bordered no-more-tables table-condensed">
                                      <thead>
                                        <tr>
                                          <th class="text-center">Código</th>
                                          <th class="text-center">Máquina</th>
                                          <th class="text-center">Horas Faltantes</th>
                                          <th class="text-center">Días Faltantes</th>
                                          <?php
                                          
                                              for ($i=0; $i < count($dias_anio); $i++)
                                              {
                                                  ?>

                                                  <th><?= $dias_anio[$i] ?></th>                                                

                                                  <?php
                                              }
                                          ?>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        
                                          <?php
                                          foreach ($machines as $machine) 
                                          {                                            
                                              ?>
                                              <tr>
                                                  <td class="text-left"><?= $machine['code'] ?></td>
                                                  <td class="text-left"><?= $machine['name'] ?></td>
                                                  <td class="text-left"><?= $machine['hour_left'] ?></td>
                                                  <td class="text-left"><?= $machine['day_left'] ?></td>

                                          <?php

                                              for ($i=0; $i < count($dias_anio); $i++)
                                              {
                                                $espacio = 0;
                                                  foreach ($data_anio as $row)
                                                  {                                                    
                                                      if($machine['id'] == $row->machine_id && date("Y-m-d", strtotime($row->date)) == $dias_anio[$i])
                                                      {
                                                          $espacio = 1;
                                                          echo "<td>Mantto ".($machine['value'] * $row->position)."</td>";
                                                      }
                                                  }
                                                  if ($espacio == 0) 
                                                  {
                                                    echo "<td>-</td>";
                                                  }                                                      
                                              }
                                              
                                              ?>
                                              </tr>

                                          <?php                                            
                                          }

                                          ?>                                  
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                            </div>
                        </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>
</div>

