<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Model $model
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Lista Modelos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Marcas'), ['controller' => 'Manufacturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Marca'), ['controller' => 'Manufacturers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="models form large-9 medium-8 columns content">
    <?= $this->Form->create($model) ?>
    <fieldset>
        <legend><?= __('Nuevo Modelo') ?></legend>
        <?php
            echo $this->Form->control('manufacture_id', ['options' => $manufacturers, 'label' => 'Marca']);
            echo $this->Form->control('name', ['label' => 'Nombre']);
            echo $this->Form->control('description', ['label' => 'Descripción']);
            echo $this->Form->control('state', ['options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO'], 'label' => 'Estado']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
