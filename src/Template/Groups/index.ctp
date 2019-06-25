<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group[]|\Cake\Collection\CollectionInterface $groups
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Nueva Linea'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="groups index large-9 medium-8 columns content">
    <h3><?= __('Lineas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('group_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('name', 'Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description', 'Descripción') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state', 'Estado') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datetime') ?></th> -->
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groups as $group): ?>
            <tr>
                <!-- <td><?= $this->Number->format($group->group_id) ?></td> -->
                <td><?= h($group->name) ?></td>
                <td><?= h($group->description) ?></td>
                <td><?= h($group->state) ?></td>
                <!-- <td><?= $this->Number->format($group->user_created) ?></td>
                <td><?= h($group->created) ?></td>
                <td><?= $this->Number->format($group->user_modified) ?></td>
                <td><?= h($group->datetime) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $group->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $group->id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $group->id], ['confirm' => __('Estas seguro que quiere eliminar: {0}?', $group->name)]) ?>
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
