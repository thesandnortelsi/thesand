<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DateHorometer $dateHorometer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('OPCIONES') ?></li>
        <li><?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $dateHorometer->date_horometer_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $dateHorometer->date_horometer_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista Fecha Horómetros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Máquinas'), ['controller' => 'Machines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Máquina'), ['controller' => 'Machines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dateHorometers form large-9 medium-8 columns content">
    <?= $this->Form->create($dateHorometer) ?>
    <fieldset>
        <legend><?= __('Agregar Horómetro '.$dateHorometer->date) ?></legend>
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
                        <td><?= $this->Form->control('date_horometers_machines.day[]', ['label' => '']) ?></td>
                        <td><?= $this->Form->control('date_horometers_machines.night[]', ['label' => '']) ?></td>
                        <?= $this->Form->control('date_horometers_machines.machine_id[]', ['label' => '', 'value' => $machine->machine_id, 'type' => 'hidden']) ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
