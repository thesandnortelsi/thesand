<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person[]|\Cake\Collection\CollectionInterface $persons
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Identification Documents'), ['controller' => 'IdentificationDocuments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Identification Document'), ['controller' => 'IdentificationDocuments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="persons index large-9 medium-8 columns content">
    <h3><?= __('Persons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('identification_document_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('surname_father') ?></th>
                <th scope="col"><?= $this->Paginator->sort('surname_mother') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('document') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persons as $person): ?>
            <tr>
                <td><?= $this->Number->format($person->person_id) ?></td>
                <td><?= $person->has('identification_document') ? $this->Html->link($person->identification_document->identification_document_id, ['controller' => 'IdentificationDocuments', 'action' => 'view', $person->identification_document->identification_document_id]) : '' ?></td>
                <td><?= $person->has('address') ? $this->Html->link($person->address->address_id, ['controller' => 'Addresses', 'action' => 'view', $person->address->address_id]) : '' ?></td>
                <td><?= h($person->surname_father) ?></td>
                <td><?= h($person->surname_mother) ?></td>
                <td><?= h($person->name) ?></td>
                <td><?= h($person->document) ?></td>
                <td><?= h($person->email) ?></td>
                <td><?= h($person->birthdate) ?></td>
                <td><?= h($person->gender) ?></td>
                <td><?= h($person->state) ?></td>
                <td><?= $this->Number->format($person->user_created) ?></td>
                <td><?= h($person->created) ?></td>
                <td><?= $this->Number->format($person->user_modified) ?></td>
                <td><?= h($person->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $person->person_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $person->person_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $person->person_id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->person_id)]) ?>
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
