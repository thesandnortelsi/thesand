<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programming $programming
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $programming->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $programming->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Programmings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="programmings form large-9 medium-8 columns content">
    <?= $this->Form->create($programming) ?>
    <fieldset>
        <legend><?= __('Edit Programming') ?></legend>
        <?php
            echo $this->Form->control('machine_id', ['options' => $machines]);
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('year');
            echo $this->Form->control('month');
            echo $this->Form->control('day');
            echo $this->Form->control('position');
            echo $this->Form->control('horometer_estimated');
            echo $this->Form->control('horometer_mantenaice');
            echo $this->Form->control('user_created');
            echo $this->Form->control('user_modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
