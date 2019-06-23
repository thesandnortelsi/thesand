<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Functionality[]|\Cake\Collection\CollectionInterface $functionalities
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <!-- <li><?= $this->Html->link(__('New Functionality'), ['action' => 'add']) ?></li> -->
        <li><?= $this->Html->link(__('Lista Rol'), ['controller' => 'Rols', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Rol'), ['controller' => 'Rols', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="functionalities index large-9 medium-8 columns content">
    <h3><?= __('Funcionalidades:') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('functionality_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Descripción') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Estado') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('Fecha Modificación') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($functionalities as $functionality): ?>
            <tr>
                <!-- <td><?= $this->Number->format($functionality->functionality_id) ?></td> -->
                <td><?= h($functionality->name) ?></td>
                <td><?= h($functionality->description) ?></td>
                <td><?= h($functionality->state) ?></td>
                <!-- <td><?= $this->Number->format($functionality->user_modified) ?></td> -->
                <td><?= h($functionality->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $functionality->functionality_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $functionality->functionality_id]) ?>
                    <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $functionality->functionality_id], ['confirm' => __('Are you sure you want to delete # {0}?', $functionality->functionality_id)]) ?> -->
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
