<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->user_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Usuarios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Personal'), ['controller' => 'Persons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Personal'), ['controller' => 'Persons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Rol'), ['controller' => 'Rols', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Rol'), ['controller' => 'Rols', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Editar Usuario') ?></legend>
        <?php
            echo $this->Form->control('person_id', ['options' => $persons, 'empty' => true]);
            echo $this->Form->control('rol_id', ['options' => $rols, 'label' => 'Rol']);
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('state', [ 'label' => 'Estado', 'options' => ['Activo' => 'Activo', 'Inactivo' => 'Inactivo']]);
            echo $this->Form->control('user_modified', ['type' => 'hidden', 'value' => $current_user['user_id'] ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
