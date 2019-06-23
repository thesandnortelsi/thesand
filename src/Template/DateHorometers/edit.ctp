<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DateHorometer $dateHorometer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $dateHorometer->date_horometer_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dateHorometer->date_horometer_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Date Horometers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dateHorometers form large-9 medium-8 columns content">
    <?= $this->Form->create($dateHorometer) ?>
    <fieldset>
        <legend><?= __('Edit Date Horometer') ?></legend>
        <?php
            echo $this->Form->control('date', ['empty' => true]);
            echo $this->Form->control('state');
            echo $this->Form->control('user_created');
            echo $this->Form->control('user_modified');
            echo $this->Form->control('machines._ids', ['options' => $machines]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
