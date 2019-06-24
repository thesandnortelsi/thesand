<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Model[]|\Cake\Collection\CollectionInterface $models
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Nuevo Modelo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Marcas'), ['controller' => 'Manufacturers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Marca'), ['controller' => 'Manufacturers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="models index large-9 medium-8 columns content">
    <h3><?= __('Modelos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('model_id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('manufacture_id', 'Marca') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name', 'Modelo') ?></th>
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
            <?php foreach ($models as $model): ?>
            <tr>
                <!-- <td><?= $this->Number->format($model->model_id) ?></td> -->
                <td><?= $model->has('manufacturer') ? $this->Html->link($model->manufacturer->name, ['controller' => 'Manufacturers', 'action' => 'view', $model->manufacturer->manufacture_id]) : '' ?></td>
                <td><?= h($model->name) ?></td>
                <td><?= h($model->description) ?></td>
                <td><?= h($model->state) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $model->model_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $model->model_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $model->model_id], ['confirm' => __('Esta seguro que quiere eliminar {0}?', $model->name)]) ?>
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
