<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Person $person
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $person->person_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $person->person_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Persons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Identification Documents'), ['controller' => 'IdentificationDocuments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Identification Document'), ['controller' => 'IdentificationDocuments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="persons form large-9 medium-8 columns content">
    <?= $this->Form->create($person) ?>
    <fieldset>
        <legend><?= __('Edit Person') ?></legend>
        <?php
            echo $this->Form->control('identification_document_id', ['options' => $identificationDocuments, 'empty' => true]);
            echo $this->Form->control('address_id', ['options' => $addresses, 'empty' => true]);
            echo $this->Form->control('surname_father');
            echo $this->Form->control('surname_mother');
            echo $this->Form->control('name');
            echo $this->Form->control('document');
            echo $this->Form->control('email');
            echo $this->Form->control('birthdate', ['empty' => true]);
            echo $this->Form->control('gender');
            echo $this->Form->control('state');
            echo $this->Form->control('user_created');
            echo $this->Form->control('user_modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
