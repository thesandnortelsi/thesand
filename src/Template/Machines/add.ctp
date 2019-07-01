<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Machine $machine
 */
?>
<ul class="breadcrumb">
            <li>
              <p>MANTENIMIENTO</p>
            </li>
            <li><?= $this->Html->link('Máquinas', ['controller' => 'Machines', 'action' => 'index'], ['class' => 'active']) ?></li>
          </ul>
          <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Nueva - <span class="semi-bold">Máquina</span></h3>
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
                  <!-- <form action="#" id="form_traditional_validation" name="form_traditional_validation" role="form" autocomplete="off" class="validate"> -->

                <?= $this->Form->create($machine) ?>

                    <div class="form-group">
                      <?= $this->Form->control('area_id', ['options' => $areas, 'label' => 'Área', 'class' => 'form-control']); ?>
                    </div>

                    <div class="form-group">
                      <?=  $this->Form->control('model_id', ['options' => $models, 'label' => 'Modelo', 'class' => 'form-control']); ?>
                    </div>

                    <div class="form-group">
                      <?= $this->Form->control('group_id', ['options' => $groups, 'class' => 'form-control']); ?>
                    </div>

                    <div class="form-group">
                      <?= $this->Form->control('code', ['label' => 'Código', 'class' => 'form-control']); ?>
                    </div>

                    <div class="form-group">
                      <div class="input-with-icon right">
                        <?= $this->Form->control('name', ['label' => 'Nombre', 'class' => 'form-control']); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-with-icon right">
                        <?= $this->Form->control('description', ['label' => 'Descripción', 'class' => 'form-control']); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-with-icon right">
                        <?= $this->Form->control('series', ['label' => 'Serie', 'class' => 'form-control']); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-with-icon right">
                        <?= $this->Form->control('plate', ['label' => 'Placa', 'class' => 'form-control']); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-with-icon right">
                        <?= $this->Form->control('year', ['label' => 'Año', 'class' => 'form-control']); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-with-icon right">
                        <?= $this->Form->control('ispection', ['type' => 'date', 'minYear' => date('Y') - 80, 'maxYear' => date('Y'), 'label' => 'Inspección', 'class' => 'form-control', 'value' => date('Y-m-d')]); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-with-icon right">
                        <?= $this->Form->control('entry', ['type' => 'date', 'minYear' => date('Y') - 80, 'maxYear' => date('Y'), 'label' => 'Fecha de Ingreso', 'class' => 'form-control', 'value' => date('Y-m-d')]); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-with-icon right">
                        <?= $this->Form->control('horometer', ['label' => 'Horómetro de Ingreso', 'class' => 'form-control']); ?>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="input-with-icon right">
                        <?= $this->Form->control('state', [ 'label' => 'Estado', 'class' => 'form-control select2', 'data-init-plugin' => 'select2', 'options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO']]); ?>
                      </div>
                    </div>
                    <div class="form-actions">
                      <div class="pull-right">

                        <?= $this->Form->button('Guardar', ['class' => 'btn btn-success btn-cons']) ?>
                        <?= $this->Html->link('Cancelar', ['controller' => 'Manufacturers', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?>
    
                      </div>
                    </div>
                  <?= $this->Form->end() ?>
                </div>
              </div>
            </div>
            
          </div>
          