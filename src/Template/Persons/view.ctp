<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->person_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->person_id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->person_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Persons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Identification Documents'), ['controller' => 'IdentificationDocuments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Identification Document'), ['controller' => 'IdentificationDocuments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="persons view large-9 medium-8 columns content">
    <h3><?= h($person->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Identification Document') ?></th>
            <td><?= $person->has('identification_document') ? $this->Html->link($person->identification_document->identification_document_id, ['controller' => 'IdentificationDocuments', 'action' => 'view', $person->identification_document->identification_document_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= $person->has('address') ? $this->Html->link($person->address->address_id, ['controller' => 'Addresses', 'action' => 'view', $person->address->address_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname Father') ?></th>
            <td><?= h($person->surname_father) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Surname Mother') ?></th>
            <td><?= h($person->surname_mother) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($person->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Document') ?></th>
            <td><?= h($person->document) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($person->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gender') ?></th>
            <td><?= h($person->gender) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($person->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Person Id') ?></th>
            <td><?= $this->Number->format($person->person_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Created') ?></th>
            <td><?= $this->Number->format($person->user_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Modified') ?></th>
            <td><?= $this->Number->format($person->user_modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birthdate') ?></th>
            <td><?= h($person->birthdate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($person->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($person->modified) ?></td>
        </tr>
    </table>
</div>
