<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typeevents'), ['controller' => 'Typeevents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typeevent'), ['controller' => 'Typeevents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Correctives'), ['controller' => 'Correctives', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Corrective'), ['controller' => 'Correctives', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events index large-9 medium-8 columns content">
    <h3><?= __('Events') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('machine_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typeevent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('observation') ?></th>
                <th scope="col"><?= $this->Paginator->sort('operator') ?></th>
                <th scope="col"><?= $this->Paginator->sort('responsible') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horometer_start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horometer_end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_execution') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year_executiom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month_execution') ?></th>
                <th scope="col"><?= $this->Paginator->sort('day_execution') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= $this->Number->format($event->id) ?></td>
                <td><?= $event->has('machine') ? $this->Html->link($event->machine->name, ['controller' => 'Machines', 'action' => 'view', $event->machine->id]) : '' ?></td>
                <td><?= $event->has('typeevent') ? $this->Html->link($event->typeevent->name, ['controller' => 'Typeevents', 'action' => 'view', $event->typeevent->id]) : '' ?></td>
                <td><?= h($event->name) ?></td>
                <td><?= h($event->description) ?></td>
                <td><?= h($event->observation) ?></td>
                <td><?= $this->Number->format($event->operator) ?></td>
                <td><?= $this->Number->format($event->responsible) ?></td>
                <td><?= h($event->date) ?></td>
                <td><?= h($event->year) ?></td>
                <td><?= h($event->month) ?></td>
                <td><?= h($event->day) ?></td>
                <td><?= $this->Number->format($event->horometer_start) ?></td>
                <td><?= $this->Number->format($event->horometer_end) ?></td>
                <td><?= h($event->start) ?></td>
                <td><?= h($event->end) ?></td>
                <td><?= h($event->total) ?></td>
                <td><?= h($event->date_execution) ?></td>
                <td><?= h($event->year_executiom) ?></td>
                <td><?= h($event->month_execution) ?></td>
                <td><?= h($event->day_execution) ?></td>
                <td><?= h($event->state) ?></td>
                <td><?= $this->Number->format($event->user_created) ?></td>
                <td><?= h($event->created) ?></td>
                <td><?= $this->Number->format($event->user_modified) ?></td>
                <td><?= h($event->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
