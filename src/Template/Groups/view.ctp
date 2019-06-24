<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Editar Linea'), ['action' => 'edit', $group->group_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Linea'), ['action' => 'delete', $group->group_id], ['confirm' => __('Estas seguro que quiere eliminar: {0}?', $group->name)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Lineas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Linea'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groups view large-9 medium-8 columns content">
    <h3><?= h($group->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($group->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripción') ?></th>
            <td><?= h($group->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($group->state) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Usuario Creó') ?></th>
            <td><?php if(!empty($creo)) { echo $creo->username; }  ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Creó') ?></th>
            <td><?= h($group->created) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Usuario Modifico') ?></th>
            <td><?php if(!empty($modifico)) { echo $modifico->username; }  ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Fecha Modificó') ?></th>
            <td><?= h($group->modified) ?></td>
        </tr>
    </table>
</div>
