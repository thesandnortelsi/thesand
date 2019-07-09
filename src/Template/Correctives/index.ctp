<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Corrective[]|\Cake\Collection\CollectionInterface $correctives
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Corrective'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="correctives index large-9 medium-8 columns content">
    <h3><?= __('Correctives') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('int') ?></th>
                <th scope="col"><?= $this->Paginator->sort('machine_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($correctives as $corrective): ?>
            <tr>
                <td><?= $this->Number->format($corrective->int) ?></td>
                <td><?= $corrective->has('machine') ? $this->Html->link($corrective->machine->name, ['controller' => 'Machines', 'action' => 'view', $corrective->machine->id]) : '' ?></td>
                <td><?= h($corrective->name) ?></td>
                <td><?= h($corrective->description) ?></td>
                <td><?= h($corrective->date) ?></td>
                <td><?= h($corrective->year) ?></td>
                <td><?= h($corrective->month) ?></td>
                <td><?= h($corrective->day) ?></td>
                <td><?= $this->Number->format($corrective->user_created) ?></td>
                <td><?= h($corrective->created) ?></td>
                <td><?= $this->Number->format($corrective->user_modified) ?></td>
                <td><?= h($corrective->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $corrective->int]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $corrective->int]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $corrective->int], ['confirm' => __('Are you sure you want to delete # {0}?', $corrective->int)]) ?>
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
