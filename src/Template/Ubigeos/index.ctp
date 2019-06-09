<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ubigeo[]|\Cake\Collection\CollectionInterface $ubigeos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ubigeo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ubigeos index large-9 medium-8 columns content">
    <h3><?= __('Ubigeos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ubigeo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disId') ?></th>
                <th scope="col"><?= $this->Paginator->sort('populated_center') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ubigeos as $ubigeo): ?>
            <tr>
                <td><?= h($ubigeo->ubigeo_id) ?></td>
                <td><?= h($ubigeo->disId) ?></td>
                <td><?= h($ubigeo->populated_center) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ubigeo->ubigeo_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ubigeo->ubigeo_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ubigeo->ubigeo_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ubigeo->ubigeo_id)]) ?>
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
