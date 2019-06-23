<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ubigeo $ubigeo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Ubigeos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="ubigeos form large-9 medium-8 columns content">
    <?= $this->Form->create($ubigeo) ?>
    <fieldset>
        <legend><?= __('Add Ubigeo') ?></legend>
        <?php
            echo $this->Form->control('disId');
            echo $this->Form->control('populated_center');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
