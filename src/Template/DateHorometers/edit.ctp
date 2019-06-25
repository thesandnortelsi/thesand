<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Datehorometer $datehorometer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <!-- <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $datehorometer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $datehorometer->id)]
            )
        ?></li> -->
        <li><?= $this->Html->link(__('Lista Horómetros'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista Máquinas'), ['controller' => 'Machines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Nueva Máquina'), ['controller' => 'Machines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="datehorometers form large-9 medium-8 columns content">
    <?= $this->Form->create($datehorometer) ?>
    <fieldset>
        <legend><?= __('Editar Horómetro: '.$datehorometer->date) ?></legend>
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
                    <?php foreach ($machines as $machine): ?>
                    <tr>
                        <td><?= h($machine['code']) ?></td>
                        <td><?= h($machine['name']) ?></td>
                        <td><?= h($machine['model']) ?></td>
                        <td>
                            <?php 
                                if($horometerOld)
                                {
                                    $horoOld = '-';
                                    foreach ($horometerOld as $row)
                                        { 
                                            if ($machine['id'] == $row->machine_id) 
                                            {
                                                $horoOld = $row->night;
                                            }
                                        }
                                }
                            ?>
                            <?= h($horoOld) ?>
                        </td>
                        <td>
                        <?php 
                            if($horometerByDate)
                            {
                                $valDay = null;
                                $valNight = null;
                                foreach ($horometerByDate as $row)
                                    { 
                                        if ($machine['id'] == $row->machine_id) 
                                        {
                                            $valDay = $row->day;
                                            $valNight = $row->night;
                                        }
                                    }
                            }
                        ?>

                            <?= $this->Form->control('datehorometers_machines.day[]', ['label' => '', 'value' => $valDay]) ?>

                        </td>
                        <td><?= $this->Form->control('datehorometers_machines.night[]', ['label' => '', 'value' => $valNight]) ?></td>
                        <?= $this->Form->control('datehorometers_machines.machine_id[]', ['label' => '', 'value' => $machine['id'], 'type' => 'hidden']) ?>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
