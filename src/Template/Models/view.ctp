<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Model $model
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Editar Modelo'), ['action' => 'edit', $model->model_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Modelo'), ['action' => 'delete', $model->model_id], ['confirm' => __('Estas seguro que quiere eliminar: {0}?', $model->name)]) ?> </li>
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
