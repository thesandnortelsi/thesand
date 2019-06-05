<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rol $rol
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rol'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="rol form large-9 medium-8 columns content">
    <?= $this->Form->create($rol) ?>
    <fieldset>
        <legend><?= __('Nuevo Rol') ?></legend>
        <?php
            echo $this->Form->control('rolDescripcion', ['label' => 'Descripción']);
            echo $this->Form->control('rolEstado', ['label' => 'Estado', 'options' => ['Activo' => 'Activo', 'Inactivo' => 'Inactivo']]);
            // echo $this->Form->control('rolUsrCrea');
            echo $this->Form->control('rolFecCrea', ['empty' => true, 'value' => date("Y-m-d H:i:s"), 'type' => 'hidden']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>