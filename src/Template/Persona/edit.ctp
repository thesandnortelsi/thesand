<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Persona $persona
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $persona->perId],
                ['confirm' => __('Are you sure you want to delete # {0}?', $persona->perId)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Persona'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="persona form large-9 medium-8 columns content">
    <?= $this->Form->create($persona) ?>
    <fieldset>
        <legend><?= __('Edit Persona') ?></legend>
        <?php
            echo $this->Form->control('perApePaterno');
            echo $this->Form->control('perApeMaterno');
            echo $this->Form->control('perNombres');
            echo $this->Form->control('perDocumento');
            echo $this->Form->control('perEmail');
            echo $this->Form->control('perFecNacimiento', ['empty' => true]);
            echo $this->Form->control('perEstado');
            echo $this->Form->control('perUsrCrea');
            echo $this->Form->control('perFecCrea', ['empty' => true]);
            echo $this->Form->control('perUsrModifica');
            echo $this->Form->control('perFecModifica', ['empty' => true]);
            echo $this->Form->control('tdiId');
            echo $this->Form->control('personacol');
            echo $this->Form->control('personacol1');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
