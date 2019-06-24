<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DateHorometer[]|\Cake\Collection\CollectionInterface $dateHorometers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Date Horometer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dateHorometers index large-9 medium-8 columns content">
    <h3><?= __('Date Horometers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('date_horometer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dateHorometers as $dateHorometer): ?>
            <tr>
                <td><?= $this->Number->format($dateHorometer->date_horometer_id) ?></td>
                <td><?= h($dateHorometer->date) ?></td>
                <td><?= h($dateHorometer->state) ?></td>
                <td><?= $this->Number->format($dateHorometer->user_created) ?></td>
                <td><?= h($dateHorometer->created) ?></td>
                <td><?= $this->Number->format($dateHorometer->user_modified) ?></td>
                <td><?= h($dateHorometer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dateHorometer->date_horometer_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dateHorometer->date_horometer_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dateHorometer->date_horometer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dateHorometer->date_horometer_id)]) ?>
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
