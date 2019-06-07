<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rol $rol
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $rol->rol_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rol->rol_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Rol'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="rols form large-9 medium-8 columns content">
    <?= $this->Form->create($rol) ?>
    <fieldset>
        <legend><?= __('Editar Rol') ?></legend>
        <?php
            echo $this->Form->control('name', ['label' => 'Nombre']);
            echo $this->Form->control('state', ['options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO'], 'label' => 'Estado']);
            echo $this->Form->control('user_modified', ['type' => 'hidden', 'value' => $current_user['user_id'] ]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
