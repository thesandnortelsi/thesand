<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Machine[]|\Cake\Collection\CollectionInterface $machines
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Nueva Máquina'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Áreas'), ['controller' => 'Areas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Área'), ['controller' => 'Areas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Modelos'), ['controller' => 'Models', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nuevo Modelo'), ['controller' => 'Models', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista Lineas'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Linea'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="machines index large-9 medium-8 columns content">
    <h3><?= __('Equipo / Maquinaria Pesada') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('area_id', 'Área') ?></th>
                <th scope="col"><?= $this->Paginator->sort('model_id', 'Modelo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id', 'Linea') ?></th>
                <th scope="col"><?= $this->Paginator->sort('code', 'Código') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name', 'Nombre') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('description') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('series') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('plate', 'Placa') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ispection') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entry') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horometer') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('state', 'Estado') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($machines as $machine): ?>
            <tr>
                <td><?= $machine->has('area') ? $this->Html->link($machine->area->name, ['controller' => 'Areas', 'action' => 'view', $machine->area->area_id]) : '' ?></td>
                <td><?= $machine->has('model') ? $this->Html->link($machine->model->name, ['controller' => 'Models', 'action' => 'view', $machine->model->model_id]) : '' ?></td>
                <td><?= $machine->has('group') ? $this->Html->link($machine->group->name, ['controller' => 'Groups', 'action' => 'view', $machine->group->group_id]) : '' ?></td>
                <td><?= h($machine->code) ?></td>
                <td><?= h($machine->name) ?></td>
                <td><?= h($machine->plate) ?></td>
                <td><?= h($machine->state) ?></td>
                
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $machine->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $machine->id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $machine->id], ['confirm' => __('Está seguro que quiere eliminar: {0}?', $machine->name)]) ?>
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
