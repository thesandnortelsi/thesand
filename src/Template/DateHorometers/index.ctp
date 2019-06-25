<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Datehorometer[]|\Cake\Collection\CollectionInterface $datehorometers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Horómetro'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Máquinas'), ['controller' => 'Machines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Máquina'), ['controller' => 'Machines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="datehorometers index large-9 medium-8 columns content">
    <h3><?= __('Lista Horómetros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('date', 'Fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created', 'Fecha Creó') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified', 'Fecha Modificó') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datehorometers as $datehorometer): ?>
            <tr>
                <td><?= h($datehorometer->date) ?></td>
                <td><?= h($datehorometer->created) ?></td>
                <td><?= h($datehorometer->modified) ?></td>
                <td class="actions">
                    <!-- <?= $this->Html->link(__('Ver'), ['action' => 'view', $datehorometer->id]) ?> -->
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $datehorometer->id]) ?>
                    <!-- <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $datehorometer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $datehorometer->id)]) ?> -->
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
