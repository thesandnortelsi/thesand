<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Datehorometer $datehorometer
 */
?>


<div class="page-title">
    <h3>Horómetros </h3>
</div>
<div id="container">

    <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Editar <span class="semi-bold">Horómetro: <?= $datehorometer->date ?></span></h4>

       
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                    <a href="javascript:;" class="add"></a>
                  </div>
                </div>
                <div class="grid-body ">
                    <?= $this->Form->create($datehorometer) ?>
                          <table class="table table-bordered no-more-tables">
                                <thead>
                                  <tr>
                                    <!-- <th style="width:1%">
                                      <div class="checkbox check-default">
                                        <input id="checkbox20" type="checkbox" value="1" class="checkall">
                                        <label for="checkbox20"></label>
                                      </div>
                                    </th> -->
                                    <th scope="col">Código</th>
                                    <th scope="col">Máquina</th>
                                    <th scope="col">Modelo</th>
                                    <th scope="col">Último Horómetro</th>
                                    <th scope="col">Horómetro Día</th>
                                    <th scope="col">Horómetro Noche</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php foreach ($machines as $machine): ?>
                                    <tr>
                                        <td><?= h($machine['code']) ?></td>
                                        <td><?= h($machine['name']) ?></td>
                                        <td><?= h($machine['model']) ?></td>
                                        <td>
                                            <?php 
                                                if($horometerOld)
                                                {
                                                    $horoOld = '-';
                                                    foreach ($horometerOld as $row)
                                                        { 
                                                            if ($machine['id'] == $row->machine_id) 
                                                            {
                                                                $horoOld = $row->night;
                                                            }
                                                        }
                                                }
                                            ?>
                                            <?= h($horoOld) ?>
                                        </td>
                                        <td>
                                        <?php 
                                            if($horometerByDate)
                                            {
                                                $valDay = null;
                                                $valNight = null;
                                                foreach ($horometerByDate as $row)
                                                    { 
                                                        if ($machine['id'] == $row->machine_id) 
                                                        {
                                                            $valDay = $row->day;
                                                            $valNight = $row->night;
                                                        }
                                                    }
                                            }
                                        ?>

                                            <?= $this->Form->control('datehorometers_machines.day[]', ['label' => '', 'value' => $valDay]) ?>

                                        </td>
                                        <td><?= $this->Form->control('datehorometers_machines.night[]', ['label' => '', 'value' => $valNight]) ?></td>
                                        <?= $this->Form->control('datehorometers_machines.machine_id[]', ['label' => '', 'value' => $machine['id'], 'type' => 'hidden']) ?>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                              </table>
                        
                    <div class="form-actions">
                      <div class="pull-right">
                        <?= $this->Form->button('Guardar', ['class' => 'btn btn-success btn-cons']) ?>
                        <?= $this->Html->link('Cancelar', ['controller' => 'Datehorometers', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?>
                        </div>
                    </div>
                        <?= $this->Form->end() ?>
                </div>
              </div>
            </div>
          </div>
</div>