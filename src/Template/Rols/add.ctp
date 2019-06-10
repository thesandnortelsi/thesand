<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rol $rol
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Lista Rols'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Funcionalidades'), ['controller' => 'Functionalities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Funcionalidades'), ['controller' => 'Functionalities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rols form large-9 medium-8 columns content">
    <?= $this->Form->create($rol) ?>
    <fieldset>
        <legend><?= __('Nuevo Rol') ?></legend>
        <?php
            echo $this->Form->control('name', ['label' => 'Nombre']);
            
            echo $this->Form->control('user_created', ['type' => 'hidden', 'value' => $current_user['user_id'] ]);
            echo $this->Form->control('functionalities._ids', ['options' => $functionalities, 'label' => 'Funcionalidades']);

            echo $this->Form->control('state', ['options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO'], 'label' => 'Estado']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
