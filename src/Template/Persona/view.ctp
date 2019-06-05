<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Persona'), ['action' => 'edit', $persona->perId]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Persona'), ['action' => 'delete', $persona->perId], ['confirm' => __('Are you sure you want to delete # {0}?', $persona->perId)]) ?> </li>
        <li><?= $this->Html->link(__('List Persona'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Persona'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="persona view large-9 medium-8 columns content">
    <h3><?= h($persona->perId) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('PerApePaterno') ?></th>
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
            <th scope="row"><?= __('PerFecModifica') ?></th>
            <td><?= h($persona->perFecModifica) ?></td>
        </tr>
    </table>
</div>
