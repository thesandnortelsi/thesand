<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Manufacturer $manufacturer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Marca'), ['action' => 'edit', $manufacturer->manufacture_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Marca'), ['action' => 'delete', $manufacturer->manufacture_id], ['confirm' => __('Está seguro que quiere eliminar: {0}?', $manufacturer->name)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Marcas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Marca'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="manufacturers view large-9 medium-8 columns content">
    <h3><?= h($manufacturer->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($manufacturer->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripción') ?></th>
            <td><?= h($manufacturer->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($manufacturer->state) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Usuario Creó') ?></th>
            <td><?php if(!empty($creo)) { echo $creo->username; }  ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Fecha Creaó') ?></th>
            <td><?= h($manufacturer->created) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Usuario Modificó') ?></th>
            <td><?php if(!empty($modifico)) { echo $modifico->username; }  ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Fecha Modificó') ?></th>
            <td><?= h($manufacturer->modified) ?></td>
        </tr>
    </table>
</div>
