<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Address[]|\Cake\Collection\CollectionInterface $addresses
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Address'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ubigeos'), ['controller' => 'Ubigeos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ubigeo'), ['controller' => 'Ubigeos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="addresses index large-9 medium-8 columns content">
    <h3><?= __('Addresses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('address_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ubigeo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_road') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($addresses as $address): ?>
            <tr>
                <td><?= $this->Number->format($address->address_id) ?></td>
                <td><?= $address->has('ubigeo') ? $this->Html->link($address->ubigeo->ubigeo_id, ['controller' => 'Ubigeos', 'action' => 'view', $address->ubigeo->ubigeo_id]) : '' ?></td>
                <td><?= h($address->type_road) ?></td>
                <td><?= $this->Number->format($address->user_created) ?></td>
                <td><?= h($address->created) ?></td>
                <td><?= $this->Number->format($address->user_modified) ?></td>
                <td><?= h($address->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $address->address_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $address->address_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $address->address_id], ['confirm' => __('Are you sure you want to delete # {0}?', $address->address_id)]) ?>
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
