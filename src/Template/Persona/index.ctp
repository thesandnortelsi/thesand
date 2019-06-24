<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona[]|\Cake\Collection\CollectionInterface $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Nuevo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="persona index large-9 medium-8 columns content">
    <h3><?= __('Persona') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('perId','Codigo de Usuario') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perApePaterno','Apellido Paterno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perApeMaterno','Apellido Materno') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perNombres','Nombres') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perDocumento','Documento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perEmail','Email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perFecNacimiento','Fecha Nacimiento') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perEstado','Estado') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perUsrCrea','Usuario Creador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perFecCrea','Fecha de Creacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perUsrModifica','Modificado por') ?></th>
                <th scope="col"><?= $this->Paginator->sort('perFecModifica','Fecha de Modificacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tdiId','Codigo de tipo de documento de identidad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dirId','Codigo de direccion de telefono') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persona as $persona): ?>
            <tr>
                <td><?= $this->Number->format($persona->perId) ?></td>
                <td><?= h($persona->perApePaterno) ?></td>
                <td><?= h($persona->perApeMaterno) ?></td>
                <td><?= h($persona->perNombres) ?></td>
                <td><?= h($persona->perDocumento) ?></td>
                <td><?= h($persona->perEmail) ?></td>
                <td><?= h($persona->perFecNacimiento) ?></td>
                <td><?= h($persona->perEstado) ?></td>
                <td><?= $this->Number->format($persona->perUsrCrea) ?></td>
                <td><?= h($persona->perFecCrea) ?></td>
                <td><?= $this->Number->format($persona->perUsrModifica) ?></td>
                <td><?= h($persona->perFecModifica) ?></td>
                <td><?= $this->Number->format($persona->tdiId) ?></td>
                <td><?= h($persona->personacol) ?></td>
                <td><?= h($persona->personacol1) ?></td>
                <td><?= $this->Number->format($persona->dirId) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $persona->perId]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $persona->perId]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $persona->perId], ['confirm' => __('Esta seguro que desea eliminar # {0}?', $persona->perId)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primero')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Pagina {{page}} de {{pages}}, mostrando {{current}} registros de un {{count}} total')]) ?></p>
    </div>
</div>
