<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Functionality $functionality
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $functionality->functionality_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $functionality->functionality_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Functionalities'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Rols'), ['controller' => 'Rols', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Rol'), ['controller' => 'Rols', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="functionalities form large-9 medium-8 columns content">
    <?= $this->Form->create($functionality) ?>
    <fieldset>
        <legend><?= __('Editar Funcionalidad') ?></legend>
        <?php
            echo $this->Form->control('name', ['label' => 'Nombre']);
            echo $this->Form->control('description', ['label' => 'Descripción']);
            echo $this->Form->control('state', [ 'options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO'], 'label' => 'Estado']);
            echo $this->Form->control('user_modified', ['type' => 'hidden', 'value' => $current_user['user_id'] ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
