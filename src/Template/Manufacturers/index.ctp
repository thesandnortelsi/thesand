<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Manufacturer[]|\Cake\Collection\CollectionInterface $manufacturers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Nueva Marca'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="manufacturers index large-9 medium-8 columns content">
    <h3><?= __('Marcas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('manufacture_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('name', 'Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description', 'Descripción') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state', 'Estado') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($manufacturers as $manufacturer): ?>
            <tr>
                <!-- <td><?= $this->Number->format($manufacturer->manufacture_id) ?></td> -->
                <td><?= h($manufacturer->name) ?></td>
                <td><?= h($manufacturer->description) ?></td>
                <td><?= h($manufacturer->state) ?></td>
                <!-- <td><?= $this->Number->format($manufacturer->user_created) ?></td>
                <td><?= h($manufacturer->created) ?></td>
                <td><?= $this->Number->format($manufacturer->user_modified) ?></td>
                <td><?= h($manufacturer->modified) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $manufacturer->manufacture_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $manufacturer->manufacture_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $manufacturer->manufacture_id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $manufacturer->name)]) ?>
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
