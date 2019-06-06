<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rol $rol
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Rols'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="rols form large-9 medium-8 columns content">
    <?= $this->Form->create($rol) ?>
    <fieldset>
        <legend><?= __('Add Rol') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('state');
            echo $this->Form->control('user_created');
            echo $this->Form->control('user_modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
