<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rol $rol
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Editar Rol'), ['action' => 'edit', $rol->rol_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Rol'), ['action' => 'delete', $rol->rol_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rol->rol_id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Rol'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Rol'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rols view large-9 medium-8 columns content">
    <h3><?= h($rol->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($rol->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($rol->state) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Rol Id') ?></th>
            <td><?= $this->Number->format($rol->rol_id) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Usuario Creó') ?></th>
            <td><?= $this->Number->format($rol->user_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Creación') ?></th>
            <td><?= h($rol->created) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Usuario Modificó') ?></th>
            <td><?= $this->Number->format($rol->user_modified) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Fecha Modificación') ?></th>
            <td><?= h($rol->modified) ?></td>
        </tr>
    </table>
</div>
