<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rol[]|\Cake\Collection\CollectionInterface $rol
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Rol'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rol index large-9 medium-8 columns content">
    <h3><?= __('Rol') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('rolId') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('rolDescripcion', 'Descripción') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rolEstado', 'Estado') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('rolUsrCrea') ?></th>
                <th scope="col"><?= $this->Paginator->sort('rolFecCrea') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('rolUsrModifica', '') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('rolFecModifica', 'Fecha Modificación') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rol as $rol): ?>
            <tr>
                <!-- <td><?= $this->Number->format($rol->rolId) ?></td> -->
                <td><?= h($rol->rolDescripcion) ?></td>
                <td><?= h($rol->rolEstado) ?></td>
                <!-- <td><?= $this->Number->format($rol->rolUsrCrea) ?></td> -->
                <!-- <td><?= h($rol->rolFecCrea) ?></td> -->
                <!-- <td><?= $this->Number->format($rol->rolUsrModifica) ?></td> -->
                <td><?= h($rol->rolFecModifica) ?></td>
                <td class="actions">
                    <!-- <?= $this->Html->link(__('View'), ['action' => 'view', $rol->rolId]) ?> -->
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rol->rolId]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rol->rolId], ['confirm' => __('Are you sure you want to delete # {0}?', $rol->rolId)]) ?>
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
