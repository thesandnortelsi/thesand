<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typeevents'), ['controller' => 'Typeevents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typeevent'), ['controller' => 'Typeevents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Correctives'), ['controller' => 'Correctives', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Corrective'), ['controller' => 'Correctives', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="events view large-9 medium-8 columns content">
    <h3><?= h($event->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Machine') ?></th>
            <td><?= $event->has('machine') ? $this->Html->link($event->machine->name, ['controller' => 'Machines', 'action' => 'view', $event->machine->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Typeevent') ?></th>
            <td><?= $event->has('typeevent') ? $this->Html->link($event->typeevent->name, ['controller' => 'Typeevents', 'action' => 'view', $event->typeevent->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($event->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($event->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Observation') ?></th>
            <td><?= h($event->observation) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($event->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month') ?></th>
            <td><?= h($event->month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Day') ?></th>
            <td><?= h($event->day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year Executiom') ?></th>
            <td><?= h($event->year_executiom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month Execution') ?></th>
            <td><?= h($event->month_execution) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Day Execution') ?></th>
            <td><?= h($event->day_execution) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($event->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Operator') ?></th>
            <td><?= $this->Number->format($event->operator) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Responsible') ?></th>
            <td><?= $this->Number->format($event->responsible) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horometer Start') ?></th>
            <td><?= $this->Number->format($event->horometer_start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horometer End') ?></th>
            <td><?= $this->Number->format($event->horometer_end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Created') ?></th>
            <td><?= $this->Number->format($event->user_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Modified') ?></th>
            <td><?= $this->Number->format($event->user_modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($event->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($event->start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End') ?></th>
            <td><?= h($event->end) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total') ?></th>
            <td><?= h($event->total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Execution') ?></th>
            <td><?= h($event->date_execution) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($event->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($event->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Correctives') ?></h4>
        <?php if (!empty($event->correctives)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Int') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col"><?= __('Year') ?></th>
                <th scope="col"><?= __('Month') ?></th>
                <th scope="col"><?= __('Day') ?></th>
                <th scope="col"><?= __('User Created') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('User Modified') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($event->correctives as $correctives): ?>
            <tr>
                <td><?= h($correctives->int) ?></td>
                <td><?= h($correctives->event_id) ?></td>
                <td><?= h($correctives->name) ?></td>
                <td><?= h($correctives->description) ?></td>
                <td><?= h($correctives->date) ?></td>
                <td><?= h($correctives->year) ?></td>
                <td><?= h($correctives->month) ?></td>
                <td><?= h($correctives->day) ?></td>
                <td><?= h($correctives->user_created) ?></td>
                <td><?= h($correctives->created) ?></td>
                <td><?= h($correctives->user_modified) ?></td>
                <td><?= h($correctives->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Correctives', 'action' => 'view', $correctives->int]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Correctives', 'action' => 'edit', $correctives->int]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Correctives', 'action' => 'delete', $correctives->int], ['confirm' => __('Are you sure you want to delete # {0}?', $correctives->int)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
