<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Editar Usuario'), ['action' => 'edit', $user->user_id]) ?> </li>
        <!-- <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?> </li> -->
        <li><?= $this->Html->link(__('Lista Usuario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Personal'), ['controller' => 'Persons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Personal'), ['controller' => 'Persons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Rol'), ['controller' => 'Rols', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Rol'), ['controller' => 'Rols', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->username) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Personal') ?></th>
            <td><?= $user->has('person') ? $this->Html->link($user->person->name, ['controller' => 'Persons', 'action' => 'view', $user->person->person_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rol') ?></th>
            <td><?= $user->has('rol') ? $this->Html->link($user->rol->name, ['controller' => 'Rols', 'action' => 'view', $user->rol->rol_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($user->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Usuario Creó') ?></th>
            <!-- <td><?= $this->Number->format($user->user_created) ?></td> -->
            <td><?php if(!empty($creo)) { echo $creo->username; }  ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Fecha Creación') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Usuario Modificó') ?></th>
            <!-- <td><?= $this->Number->format($user->user_modified) ?></td> -->
            <td><?php if(!empty($modifico)) { echo $modifico->username; }  ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Fecha Modificación') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
</div>
