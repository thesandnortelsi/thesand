<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Model $model
 */
?>

<ul class="breadcrumb">
    <li>
      <p>Mantenimiento</p>
    </li>
    <li><?= $this->Html->link('Modelos', ['controller' => 'Models', 'action' => 'index'], ['class' => 'active']) ?></li>
  </ul>
  <div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Ver - <span class="semi-bold">Modelo</span></h3>
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
            
        <?= $this->Form->create($model) ?>

            <div class="form-group">

                <div class="input-with-icon right">
                    <label>Marca</label>
                    <label>
                    <?= $model->has('manufacturer') ? $this->Html->link($model->manufacturer->name, ['controller' => 'Manufacturers', 'action' => 'view', $model->manufacturer->id, 'class' => 'form-control']) : '' ?>
                    </label>
                </div>
            </div>
            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('name', [ 'label' =>'Nombre', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('description', [ 'label' =>'Descripción', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('state', [ 'label' => 'Estado', 'class' => 'form-control select2', 'disabled' => 'true', 'data-init-plugin' => 'select2', 'options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO']]); ?>
              </div>
            </div>
            <div class="form-actions">
              <div class="pull-right">

               <?= $this->Html->link('Regresar', ['controller' => 'Models', 'action' => 'index'], ['class' => 'btn btn-info btn-cons']) ?>

              </div>
            </div>
        </div>
      </div>
    </div>
    
  </div>


<!-- 
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Editar Modelo'), ['action' => 'edit', $model->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Modelo'), ['action' => 'delete', $model->id], ['confirm' => __('Estas seguro que quiere eliminar: {0}?', $model->name)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Modelos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Modelo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Marcas'), ['controller' => 'Manufacturers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Marca'), ['controller' => 'Manufacturers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="models view large-9 medium-8 columns content">
    <h3><?= h($model->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Marca') ?></th>
            <td><?= $model->has('manufacturer') ? $this->Html->link($model->manufacturer->name, ['controller' => 'Manufacturers', 'action' => 'view', $model->manufacturer->manufacture_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($model->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripción') ?></th>
            <td><?= h($model->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($model->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario Creó') ?></th>
            <td><?php if(!empty($creo)) { echo $creo->username; }  ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Fecha Creó') ?></th>
            <td><?= h($model->created) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Usuario Modificó') ?></th>
            <td><?php if(!empty($modifico)) { echo $modifico->username; }  ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Fecha Modificó') ?></th>
            <td><?= h($model->modified) ?></td>
        </tr>
    </table>
</div>
 -->