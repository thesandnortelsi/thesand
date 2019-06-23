<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ubigeo $ubigeo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ubigeo'), ['action' => 'edit', $ubigeo->ubigeo_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ubigeo'), ['action' => 'delete', $ubigeo->ubigeo_id], ['confirm' => __('Are you sure you want to delete # {0}?', $ubigeo->ubigeo_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ubigeos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ubigeo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ubigeos view large-9 medium-8 columns content">
    <h3><?= h($ubigeo->ubigeo_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ubigeo Id') ?></th>
            <td><?= h($ubigeo->ubigeo_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DisId') ?></th>
            <td><?= h($ubigeo->disId) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Populated Center') ?></th>
            <td><?= h($ubigeo->populated_center) ?></td>
        </tr>
    </table>
</div>
