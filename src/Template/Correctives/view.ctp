<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Corrective $corrective
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Corrective'), ['action' => 'edit', $corrective->int]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Corrective'), ['action' => 'delete', $corrective->int], ['confirm' => __('Are you sure you want to delete # {0}?', $corrective->int)]) ?> </li>
        <li><?= $this->Html->link(__('List Correctives'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Corrective'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="correctives view large-9 medium-8 columns content">
    <h3><?= h($corrective->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Machine') ?></th>
            <td><?= $corrective->has('machine') ? $this->Html->link($corrective->machine->name, ['controller' => 'Machines', 'action' => 'view', $corrective->machine->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($corrective->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($corrective->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($corrective->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month') ?></th>
            <td><?= h($corrective->month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Day') ?></th>
            <td><?= h($corrective->day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Int') ?></th>
            <td><?= $this->Number->format($corrective->int) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Created') ?></th>
            <td><?= $this->Number->format($corrective->user_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Modified') ?></th>
            <td><?= $this->Number->format($corrective->user_modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($corrective->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($corrective->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($corrective->modified) ?></td>
        </tr>
    </table>
</div>
