<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar persona'), ['action' => 'edit', $persona->perId]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar '), ['action' => 'delete', $persona->perId], ['confirm' => __('Esta usted seguro que desea eliminar# {0}?', $persona->perId)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Personas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Persona'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="persona view large-9 medium-8 columns content">
    <h3><?= h($persona->perId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Apelllido Paterno') ?></th>
            <td><?= h($persona->perApePaterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PerApeMaterno') ?></th>
            <td><?= h($persona->perApeMaterno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PerNombres') ?></th>
            <td><?= h($persona->perNombres) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PerDocumento') ?></th>
            <td><?= h($persona->perDocumento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PerEmail') ?></th>
            <td><?= h($persona->perEmail) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PerEstado') ?></th>
            <td><?= h($persona->perEstado) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Personacol') ?></th>
            <td><?= h($persona->personacol) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Personacol1') ?></th>
            <td><?= h($persona->personacol1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PerId') ?></th>
            <td><?= $this->Number->format($persona->perId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PerUsrCrea') ?></th>
            <td><?= $this->Number->format($persona->perUsrCrea) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PerUsrModifica') ?></th>
            <td><?= $this->Number->format($persona->perUsrModifica) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('TdiId') ?></th>
            <td><?= $this->Number->format($persona->tdiId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DirId') ?></th>
            <td><?= $this->Number->format($persona->dirId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PerFecNacimiento') ?></th>
            <td><?= h($persona->perFecNacimiento) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('PerFecCrea') ?></th>
            <td><?= h($persona->perFecCrea) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha de modificacion') ?></th>
            <td><?= h($persona->perFecModifica) ?></td>
        </tr>
    </table>
</div>
