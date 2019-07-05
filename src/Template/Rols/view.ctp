<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rol $rol
 */
?>
<ul class="breadcrumb">
    <li>
      <p>DASHBOARD</p>
    </li>
    <li><?= $this->Html->link('Roles', ['controller' => 'Functionalities', 'action' => 'index'], ['class' => 'active']) ?></li>
  </ul>
  <div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Ver - <span class="semi-bold">Rol</span></h3>
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

<?= $this->Form->create($rol) ?>

            
            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('name', ['label' => 'Nombre', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('functionalities._ids', ['options' => $functionalities, 'label' => 'Funcionalidades', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('state', [ 'label' => 'Estado', 'class' => 'form-control select2', 'data-init-plugin' => 'select2', 'options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO'], 'disabled' => 'true']); ?>
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

<?= $this->Html->link('Regresar', ['controller' => 'Rols', 'action' => 'index'], ['class' => 'btn btn-info btn-cons']) ?>

              </div>
            </div>
        </div>
      </div>
    </div>
    
  </div>