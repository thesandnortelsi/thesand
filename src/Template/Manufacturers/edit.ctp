<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Manufacturer $manufacturer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $manufacturer->id],
                ['confirm' => __('Está seguro que quiere eliminar: {0}?', $manufacturer->name)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Marcas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="manufacturers form large-9 medium-8 columns content">
    <?= $this->Form->create($manufacturer) ?>
    <fieldset>
        <legend><?= __('Editar Marca') ?></legend>
        <?php
            echo $this->Form->control('name', [ 'label' => 'Nombre']);
            echo $this->Form->control('description', [ 'label' => 'Descripción']);
            echo $this->Form->control('state', [ 'label' => 'Estado', 'options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO']]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
