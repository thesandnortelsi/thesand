<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Manufacturer $manufacturer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista Marcas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="manufacturers form large-9 medium-8 columns content">
    <?= $this->Form->create($manufacturer) ?>
    <fieldset>
        <legend><?= __('Nueva Marca') ?></legend>
        <?php
            echo $this->Form->control('name', [ 'label' =>'Nombre']);
            echo $this->Form->control('description', [ 'label' =>'Descripción']);
            echo $this->Form->control('state', [ 'label' => 'Estado', 'options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO']]);
            // echo $this->Form->control('user_created');
            // echo $this->Form->control('user_modified');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
