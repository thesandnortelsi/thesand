<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="persona form large-9 medium-8 columns content">
    <?= $this->Form->create($persona) ?>
    <fieldset>
        <legend><?= __('Add Persona') ?></legend>
        <?php
            echo $this->Form->control('perApePaterno',['label' => 'Apellido Paterno']);
            echo $this->Form->control('perApeMaterno',['label'=>'Apellido Materno']);
            echo $this->Form->control('perNombres',['label'=>'Nombres']);
            echo $this->Form->control('perDocumento',['label'=>'Num Documento']);
            echo $this->Form->control('perEmail',['label'=>'Correo Elecctronico']);
            echo $this->Form->control('perFecNacimiento', ['empty' => true,'label'=>'Fecha de Nacimiento']);
            echo $this->Form->control('perEstado',['label'=>'Estado']);
            echo $this->Form->control('perUsrCrea',['label'=>'Creado por']);
            echo $this->Form->control('perFecCrea', ['empty' => true]);
            echo $this->Form->control('perUsrModifica',['label'=>'Modificado por']);
            echo $this->Form->control('perFecModifica', ['empty' => true]);
            echo $this->Form->control('tdiId',['label'=>'Tipo de documento']);
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
