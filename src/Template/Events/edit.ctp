<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typeevents'), ['controller' => 'Typeevents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeevent'), ['controller' => 'Typeevents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Correctives'), ['controller' => 'Correctives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Corrective'), ['controller' => 'Correctives', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
            echo $this->Form->control('machine_id', ['options' => $machines]);
            echo $this->Form->control('typeevent_id', ['options' => $typeevents]);
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('observation');
            echo $this->Form->control('operator');
            echo $this->Form->control('responsible');
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('year');
            echo $this->Form->control('month');
            echo $this->Form->control('day');
            echo $this->Form->control('horometer_start');
            echo $this->Form->control('horometer_end');
            echo $this->Form->control('start', ['empty' => true]);
            echo $this->Form->control('end', ['empty' => true]);
            echo $this->Form->control('total', ['empty' => true]);
            echo $this->Form->control('date_execution', ['empty' => true]);
            echo $this->Form->control('year_executiom');
            echo $this->Form->control('month_execution');
            echo $this->Form->control('day_execution');
            echo $this->Form->control('state');
            echo $this->Form->control('user_created');
            echo $this->Form->control('user_modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
