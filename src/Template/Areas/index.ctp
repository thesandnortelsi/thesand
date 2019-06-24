<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Area[]|\Cake\Collection\CollectionInterface $areas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="areas index large-9 medium-8 columns content">
    <h3><?= __('Areas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('area_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($areas as $area): ?>
            <tr>
                <td><?= $this->Number->format($area->area_id) ?></td>
                <td><?= h($area->name) ?></td>
                <td><?= h($area->description) ?></td>
                <td><?= h($area->state) ?></td>
                <td><?= $this->Number->format($area->user_created) ?></td>
                <td><?= h($area->created) ?></td>
                <td><?= $this->Number->format($area->user_modified) ?></td>
                <td><?= h($area->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $area->area_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $area->area_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $area->area_id], ['confirm' => __('Are you sure you want to delete # {0}?', $area->area_id)]) ?>
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
