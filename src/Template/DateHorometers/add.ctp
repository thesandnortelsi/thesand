<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DateHorometer $dateHorometer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Lista Horómetros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Máquinas'), ['controller' => 'Machines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Máquina'), ['controller' => 'Machines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dateHorometers form large-9 medium-8 columns content">
    <?= $this->Form->create($dateHorometer) ?>
    <fieldset>
        <legend><?= __('Nuevo Ingreso Horómetro') ?></legend>
        <?php
            echo $this->Form->control('date', ['label' => 'Fecha']);

        ?>
            <table cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Máquina</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Último Horómetro</th>
                        <th scope="col">Horómetro Día</th>
                        <th scope="col">Horómetro Noche</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listMachine as $machine): ?>
                    <tr>
                        <td><?= h($machine->code) ?></td>
                        <td><?= h($machine->name) ?></td>
                        <td><?= h($machine->name) ?></td>
                        <td><?= h($machine->name) ?></td>
                        <td><?= $this->Form->control('date_horometers_machines.day', ['label' => '']) ?></td>
                        <td><?= $this->Form->control('date_horometers_machines.night', ['label' => '']) ?></td>
                        
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        <!-- <?php
            echo $this->Form->control('state');
            echo $this->Form->control('user_created');
            echo $this->Form->control('user_modified');
            echo $this->Form->control('machines._ids', ['options' => $machines]);
        ?> -->
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
