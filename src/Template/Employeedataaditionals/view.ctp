<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeedataaditional $employeedataaditional
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employeedataaditional'), ['action' => 'edit', $employeedataaditional->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employeedataaditional'), ['action' => 'delete', $employeedataaditional->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeedataaditional->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employeedataaditionals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employeedataaditional'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employeeworkinformations'), ['controller' => 'Employeeworkinformations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employeeworkinformation'), ['controller' => 'Employeeworkinformations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employeedataaditionals view large-9 medium-8 columns content">
    <h3><?= h($employeedataaditional->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Employeeworkinformation') ?></th>
            <td><?= $employeedataaditional->has('employeeworkinformation') ? $this->Html->link($employeedataaditional->employeeworkinformation->id, ['controller' => 'Employeeworkinformations', 'action' => 'view', $employeedataaditional->employeeworkinformation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($employeedataaditional->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname Father') ?></th>
            <td><?= h($employeedataaditional->surname_father) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname Mother') ?></th>
            <td><?= h($employeedataaditional->surname_mother) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documentnumber') ?></th>
            <td><?= h($employeedataaditional->documentnumber) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($employeedataaditional->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Relationship') ?></th>
            <td><?= h($employeedataaditional->relationship) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employeedataaditional->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Documenttype Id') ?></th>
            <td><?= $this->Number->format($employeedataaditional->documenttype_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($employeedataaditional->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Children School Age') ?></th>
            <td><?= $this->Number->format($employeedataaditional->children_school_age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Family Burden') ?></th>
            <td><?= $this->Number->format($employeedataaditional->family_burden) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Created') ?></th>
            <td><?= $this->Number->format($employeedataaditional->user_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Modified') ?></th>
            <td><?= $this->Number->format($employeedataaditional->user_modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($employeedataaditional->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($employeedataaditional->modified) ?></td>
        </tr>
    </table>
</div>
