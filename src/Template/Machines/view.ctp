<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Machine $machine
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Editar Máquina'), ['action' => 'edit', $machine->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Máquina'), ['action' => 'delete', $machine->id], ['confirm' => __('Está seguro que quiere eliminar: {0}?', $machine->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Máquinas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Maquina'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Áreas'), ['controller' => 'Areas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Área'), ['controller' => 'Areas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Modelos'), ['controller' => 'Models', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Modelo'), ['controller' => 'Models', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Lineas'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Linea'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="machines view large-9 medium-8 columns content">
    <h3><?= h($machine->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Área') ?></th>
            <td><?= $machine->has('area') ? $this->Html->link($machine->area->name, ['controller' => 'Areas', 'action' => 'view', $machine->area->area_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modelo') ?></th>
            <td><?= $machine->has('model') ? $this->Html->link($machine->model->name, ['controller' => 'Models', 'action' => 'view', $machine->model->model_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Linea') ?></th>
            <td><?= $machine->has('group') ? $this->Html->link($machine->group->name, ['controller' => 'Groups', 'action' => 'view', $machine->group->group_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Código') ?></th>
            <td><?= h($machine->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($machine->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripción') ?></th>
            <td><?= h($machine->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Serie') ?></th>
            <td><?= h($machine->series) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Placa') ?></th>
            <td><?= h($machine->plate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Año') ?></th>
            <td><?= h($machine->year) ?></td>
        </tr>
        

        <tr>
            <th scope="row"><?= __('Inspección') ?></th>
            <td><?= h($machine->ispection) ?></td>
        </tr>

         <tr>
            <th scope="row"><?= __('Fecha de Ingreso') ?></th>
            <td><?= h($machine->entry) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Horómetro de Ingreso') ?></th>
            <td><?= h($machine->horometer) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($machine->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario Creó') ?></th>
            <td><?php if(!empty($creo)) { echo $creo->username; }  ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Fecha Creó') ?></th>
            <td><?= h($machine->created) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Usuario Modificó') ?></th>
            <td><?php if(!empty($modifico)) { echo $modifico->username; }  ?></td>
        </tr>      
        
        <tr>
            <th scope="row"><?= __('Fecha Modificó') ?></th>
            <td><?= h($machine->modified) ?></td>
        </tr>
    </table>
</div>
