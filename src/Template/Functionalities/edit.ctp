<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Functionality $functionality
 */
?>
<ul class="breadcrumb">
    <li>
      <p>DASHBOARD</p>
    </li>
    <li><?= $this->Html->link('Funcionalidades', ['controller' => 'Functionalities', 'action' => 'index'], ['class' => 'active']) ?></li>
  </ul>
  <div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Editar - <span class="semi-bold">Funcionalidad</span></h3>
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

        <?= $this->Form->create($functionality) ?>

            

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
                <?= $this->Form->control('state', [ 'label' => 'Estado', 'class' => 'form-control select2', 'data-init-plugin' => 'select2', 'options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO']]); ?>
              </div>
            </div>
            <div class="form-actions">
              <div class="pull-right">

                <?= $this->Form->button('Guardar', ['class' => 'btn btn-success btn-cons']) ?>
                <?= $this->Html->link('Cancelar', ['controller' => 'Functionalities', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?>

              </div>
            </div>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>
    
  </div>