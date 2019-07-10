<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<ul class="breadcrumb">
    <li>
      <p>MANTENIMIENTO</p>
    </li>
    <li><?= $this->Html->link('Pre Usos', ['controller' => 'Events', 'action' => 'preuses'], ['class' => 'active']) ?></li>
  </ul>
  <div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Nuevo - <span class="semi-bold">Pre Uso: <?= "[".$machine->code."] ".$machine->name ?></span></h3>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="grid simple form-grid">
        <div class="grid-title no-border">
          <h4>Descripción <span class="semi-bold">Pre Uso</span></h4>
          <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <!-- <a href="#grid-config" data-toggle="modal" class="config"></a> -->
            <!-- <a href="javascript:;" class="reload"></a> -->
            <a href="javascript:;" class="remove"></a>
          </div>
        </div>
            <div class="grid-body no-border">

                <?= $this->Form->create($event) ?>



<!-- <br> -->
              <div class="form-group">
                <div class="row form-row">
                    <div class="col-md-6">
                        <?= $this->Form->control('operatos', ['label' => 'Operador', 'class' => 'form-control select2', 'data-init-plugin' => 'select2', 'options' => ['PROGRAMADO' => 'PROGRAMADO', 'SEGUIMIENTO' => 'SEGUIMIENTO']]); ?>
                    </div>

                    <div class="col-md-6">
                        <?= $this->Form->control('responsible', ['label' => 'Responsable', 'class' => 'form-control select2', 'data-init-plugin' => 'select2', 'options' => ['PROGRAMADO' => 'PROGRAMADO', 'SEGUIMIENTO' => 'SEGUIMIENTO']]); ?>
                    </div>
                </div>
              </div>



              <div class="form-group">
                <div class="row form-row">
                    <div class="col-md-5">
                          <?= $this->Form->control('horometer_start', ['label' => 'Horómetro Inicial', 'class' => 'form-control']); ?>
                    </div>
                    <div class="col-md-5">
                          <?= $this->Form->control('horometer_end', ['label' => 'Horómetro Fin', 'class' => 'form-control']); ?>
                    </div>

                    <div class="col-md-2">
                          <?= $this->Form->control('date', ['label' => 'Fecha Registro', 'class' => 'form-control', 'type' => 'date', 'value' => date('Y-m-d')]); ?>
                    </div>                    
                </div>
              </div>


              
              <div class="form-group">
                <div class="row form-row">
                    
                    <div class="col-md-7">
                          <?= $this->Form->control('description', ['label' => 'Descripción', 'class' => 'form-control']); ?>
                    </div>
                    <div class="col-md-3">                      
                          <?= $this->Form->control('state', ['label' => 'Estado', 'class' => 'form-control select2', 'data-init-plugin' => 'select2', 'options' => ['PROGRAMADO' => 'PROGRAMADO', 'SEGUIMIENTO' => 'SEGUIMIENTO']]); ?>
                    </div>
                    <div class="col-md-2">
                          <?= $this->Form->control('date_execution', ['label' => 'Fecha Ejecución', 'class' => 'form-control', 'type' => 'date', 'value' => date('Y-m-d')]); ?>
                      </div>
                </div>
              </div>

                <div class="form-actions">
                      <div class="pull-right">

                        <?= $this->Form->button('Guardar', ['class' => 'btn btn-success btn-cons']) ?>
                        <!-- <?= $this->Html->link('Cancelar', ['controller' => 'Manufacturers', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?> -->

                    </div>
                </div>


                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>