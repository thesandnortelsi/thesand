<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Personal'), ['controller' => 'Persons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Personal'), ['controller' => 'Persons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Rol'), ['controller' => 'Rols', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Rol'), ['controller' => 'Rols', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Usuarios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('user_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('person_id', 'Personal') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username', 'Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state', 'Estado') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('user_created') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('Fecha Creación') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('Fecha Modificación') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <!-- <td><?= $this->Number->format($user->user_id) ?></td> -->
                <td><?= $user->has('person') ? $this->Html->link($user->person->name, ['controller' => 'Persons', 'action' => 'view', $user->person->person_id]) : '' ?></td>
                <td><?= h($user->username) ?></td>
                <!-- <td><?= h($user->password) ?></td> -->
                <td><?= h($user->state) ?></td>
                <!-- <td><?= $this->Number->format($user->user_created) ?></td> -->
                <td><?= h($user->created) ?></td>
                <!-- <td><?= $this->Number->format($user->user_modified) ?></td> -->
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->user_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->user_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
