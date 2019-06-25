<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Datehorometer $datehorometer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Lista Horómetros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Máquinas'), ['controller' => 'Machines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Máquina'), ['controller' => 'Machines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="datehorometers form large-9 medium-8 columns content">
    <?= $this->Form->create($datehorometer) ?>
    <fieldset>
        <legend><?= __('Nuevo Ingreso Horómetro') ?></legend>
        <?php
            echo $this->Form->control('date', ['label' => 'Fecha', 'type' => 'date', 'value' => date('Y-m-d')]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Generar')) ?>
    <?= $this->Form->end() ?>
</div>
