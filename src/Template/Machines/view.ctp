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
    <h3>Ver - <span class="semi-bold">Máquina</span></h3>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="grid simple form-grid">
        <div class="grid-title no-border">
          <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#grid-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
          </div>
        </div>
        <div class="grid-body no-border">

<?= $this->Form->create($machine) ?>

            <label>Área</label>
            <div class="form-group">
              <?= $machine->has('area') ? $this->Html->link($machine->area->name, ['controller' => 'Areas', 'action' => 'view', $machine->area->id]) : '' ?>
            </div>

            <label>Modelo</label>
            <div class="form-group">
              <div class="input-with-icon right">
                <?= $machine->has('model') ? $this->Html->link($machine->model->name, ['controller' => 'Models', 'action' => 'view', $machine->model->id]) : '' ?>
              </div>
            </div>

            <label>Linea</label>
            <div class="form-group">
              <div class="input-with-icon right">
                <?= $machine->has('group') ? $this->Html->link($machine->group->name, ['controller' => 'Groups', 'action' => 'view', $machine->group->id]) : '' ?>
              </div>
            </div>


            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('code', ['label' => 'Código', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('name', ['label' => 'Nombre', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('description', ['label' => 'Descripción', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('series', ['label' => 'Serie', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('plate', ['label' => 'Placa', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('year', ['label' => 'Año', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('ispection', ['label' => 'Fecha de Inspección', 'type' => 'date', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('entry', ['label' => 'Fecha de Ingreso', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('horometer', ['label' => 'Horómetro de Ingreso', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('state', [ 'label' => 'Estado', 'class' => 'form-control select2', 'disabled' => 'true', 'data-init-plugin' => 'select2', 'options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO']]); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?php if(!empty($creo->username)) { $creo_user = $creo->username; 

                    echo $this->Form->control($creo_user, [ 'label' => 'Usuario Creó', 'class' => 'form-control select2', 'disabled' => 'true', 'data-init-plugin' => 'select2', 'value' => $creo_user]); 
                }  ?>
                
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('created', [ 'label' => 'Fecha Creó', 'disabled' => 'true', 'class' => 'form-control select2']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?php if(!empty($modifico->username)) { $modifico_user = $modifico->username; 

                echo $this->Form->control($modifico_user, [ 'label' => 'Usuario Modificó', 'class' => 'form-control select2', 'disabled' => 'true', 'value' => $modifico_user]);
            }  ?>
                
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('modified', [ 'label' => 'Fecha Modificó', 'disabled' => 'true', 'class' => 'form-control select2']); ?>
              </div>
            </div>

            <div class="form-actions">
              <div class="pull-right">

                
<?= $this->Form->end() ?>

<?= $this->Html->link('Regresar', ['controller' => 'Machines', 'action' => 'index'], ['class' => 'btn btn-info btn-cons']) ?>

              </div>
            </div>
        </div>
      </div>
    </div>
    
  </div>