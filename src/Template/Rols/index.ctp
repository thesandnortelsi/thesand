<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rol[]|\Cake\Collection\CollectionInterface $rols
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rol'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rols index large-9 medium-8 columns content">
    <h3><?= __('Rols') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('rol_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rols as $rol): ?>
            <tr>
                <td><?= $this->Number->format($rol->rol_id) ?></td>
                <td><?= h($rol->name) ?></td>
                <td><?= h($rol->state) ?></td>
                <td><?= $this->Number->format($rol->user_created) ?></td>
                <td><?= h($rol->created) ?></td>
                <td><?= $this->Number->format($rol->user_modified) ?></td>
                <td><?= h($rol->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $rol->rol_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rol->rol_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rol->rol_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rol->rol_id)]) ?>
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
