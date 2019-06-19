<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Machine $machine
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista Máquinas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Áreas'), ['controller' => 'Areas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Área'), ['controller' => 'Areas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Modelos'), ['controller' => 'Models', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Modelo'), ['controller' => 'Models', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Lineas'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Linea'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="machines form large-9 medium-8 columns content">
    <?= $this->Form->create($machine) ?>
    <fieldset>
        <legend><?= __('Nuevo Equipo / Maquinaria Pesada') ?></legend>
        <?php
            echo $this->Form->control('area_id', ['options' => $areas, 'label' => 'Área']);
            echo $this->Form->control('model_id', ['options' => $models, 'label' => 'Modelo']);
            echo $this->Form->control('group_id', ['options' => $groups, 'label' => 'Linea']);
            echo $this->Form->control('code', ['label' => 'Código']);
            echo $this->Form->control('name', ['label' => 'Nombre']);
            echo $this->Form->control('description', ['label' => 'Descripción']);
            echo $this->Form->control('series', ['label' => 'Serie']);
            echo $this->Form->control('plate', ['label' => 'Placa']);
            // echo $this->Form->control('year', ['label' => 'Año ', 'type' =>'year', 'minYear' => date('Y') - 80, 'maxYear' => date('Y') + 1]);
            echo $this->Form->control('year', ['label' => 'Año']);
            echo $this->Form->control('ispection', ['type' => 'date', 'label' => 'Inspección', 'minYear' => date('Y') - 80, 'maxYear' => date('Y')]);
            echo $this->Form->control('entry', ['type' => 'date', 'label' => 'Fecha de Ingreso', 'minYear' => date('Y') - 80, 'maxYear' => date('Y')]);
            echo $this->Form->control('horometer', ['label' => 'Horómetro de Ingreso']);
            echo $this->Form->control('state', [ 'label' => 'Estado', 'options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
