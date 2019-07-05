<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programming $programming
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Programming'), ['action' => 'edit', $programming->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Programming'), ['action' => 'delete', $programming->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programming->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Programmings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Programming'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="programmings view large-9 medium-8 columns content">
    <h3><?= h($programming->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Machine') ?></th>
            <td><?= $programming->has('machine') ? $this->Html->link($programming->machine->name, ['controller' => 'Machines', 'action' => 'view', $programming->machine->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Year') ?></th>
            <td><?= h($programming->year) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Month') ?></th>
            <td><?= h($programming->month) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Day') ?></th>
            <td><?= h($programming->day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($programming->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $this->Number->format($programming->position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horometer Estimated') ?></th>
            <td><?= $this->Number->format($programming->horometer_estimated) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Horometer Mantenaice') ?></th>
            <td><?= $this->Number->format($programming->horometer_mantenaice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Created') ?></th>
            <td><?= $this->Number->format($programming->user_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Modified') ?></th>
            <td><?= $this->Number->format($programming->user_modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($programming->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($programming->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($programming->modified) ?></td>
        </tr>
    </table>
</div>
