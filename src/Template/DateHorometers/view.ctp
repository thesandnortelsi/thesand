<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DateHorometer $dateHorometer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Date Horometer'), ['action' => 'edit', $dateHorometer->date_horometer_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Date Horometer'), ['action' => 'delete', $dateHorometer->date_horometer_id], ['confirm' => __('Are you sure you want to delete # {0}?', $dateHorometer->date_horometer_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Date Horometers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Date Horometer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dateHorometers view large-9 medium-8 columns content">
    <h3><?= h($dateHorometer->date_horometer_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($dateHorometer->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Horometer Id') ?></th>
            <td><?= $this->Number->format($dateHorometer->date_horometer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Created') ?></th>
            <td><?= $this->Number->format($dateHorometer->user_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Modified') ?></th>
            <td><?= $this->Number->format($dateHorometer->user_modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($dateHorometer->date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($dateHorometer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($dateHorometer->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Machines') ?></h4>
        <?php if (!empty($dateHorometer->machines)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Machine Id') ?></th>
                <th scope="col"><?= __('Area Id') ?></th>
                <th scope="col"><?= __('Model Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Series') ?></th>
                <th scope="col"><?= __('Plate') ?></th>
                <th scope="col"><?= __('Year') ?></th>
                <th scope="col"><?= __('Ispection') ?></th>
                <th scope="col"><?= __('Entry') ?></th>
                <th scope="col"><?= __('Horometer') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('User Created') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('User Modified') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($dateHorometer->machines as $machines): ?>
            <tr>
                <td><?= h($machines->machine_id) ?></td>
                <td><?= h($machines->area_id) ?></td>
                <td><?= h($machines->model_id) ?></td>
                <td><?= h($machines->group_id) ?></td>
                <td><?= h($machines->code) ?></td>
                <td><?= h($machines->name) ?></td>
                <td><?= h($machines->description) ?></td>
                <td><?= h($machines->series) ?></td>
                <td><?= h($machines->plate) ?></td>
                <td><?= h($machines->year) ?></td>
                <td><?= h($machines->ispection) ?></td>
                <td><?= h($machines->entry) ?></td>
                <td><?= h($machines->horometer) ?></td>
                <td><?= h($machines->state) ?></td>
                <td><?= h($machines->user_created) ?></td>
                <td><?= h($machines->created) ?></td>
                <td><?= h($machines->user_modified) ?></td>
                <td><?= h($machines->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Machines', 'action' => 'view', $machines->machine_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Machines', 'action' => 'edit', $machines->machine_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Machines', 'action' => 'delete', $machines->machine_id], ['confirm' => __('Are you sure you want to delete # {0}?', $machines->machine_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
