<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Corrective $corrective
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $corrective->int],
                ['confirm' => __('Are you sure you want to delete # {0}?', $corrective->int)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Correctives'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="correctives form large-9 medium-8 columns content">
    <?= $this->Form->create($corrective) ?>
    <fieldset>
        <legend><?= __('Edit Corrective') ?></legend>
        <?php
            echo $this->Form->control('event_id', ['options' => $events]);
            echo $this->Form->control('name');
            echo $this->Form->control('description');
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('year');
            echo $this->Form->control('month');
            echo $this->Form->control('day');
            echo $this->Form->control('user_created');
            echo $this->Form->control('user_modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
