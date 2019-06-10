<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rol[]|\Cake\Collection\CollectionInterface $rols
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Rol'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Funcionalidades'), ['controller' => 'Functionalities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Functionalidad'), ['controller' => 'Functionalities', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="rols index large-9 medium-8 columns content">
    <h3><?= __('Rols') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Fecha Modificación') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rols as $rol): ?>
            <tr>
                <td><?= h($rol->name) ?></td>
                <td><?= h($rol->state) ?></td>
                <td><?= h($rol->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $rol->rol_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $rol->rol_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $rol->rol_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rol->rol_id)]) ?>
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
