<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Functionality $functionality
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Functionality'), ['action' => 'edit', $functionality->functionality_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Functionality'), ['action' => 'delete', $functionality->functionality_id], ['confirm' => __('Are you sure you want to delete # {0}?', $functionality->functionality_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Functionalities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Functionality'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Rols'), ['controller' => 'Rols', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Rol'), ['controller' => 'Rols', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="functionalities view large-9 medium-8 columns content">
    <h3><?= h($functionality->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($functionality->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripción') ?></th>
            <td><?= h($functionality->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($functionality->state) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Functionality Id') ?></th>
            <td><?= $this->Number->format($functionality->functionality_id) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Usuario Modificó') ?></th>
            <td><?= $this->Number->format($functionality->user_modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Modificación') ?></th>
            <td><?= h($functionality->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Rols') ?></h4>
        <?php if (!empty($functionality->rols)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Rol Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('User Created') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('User Modified') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($functionality->rols as $rols): ?>
            <tr>
                <td><?= h($rols->rol_id) ?></td>
                <td><?= h($rols->name) ?></td>
                <td><?= h($rols->state) ?></td>
                <td><?= h($rols->user_created) ?></td>
                <td><?= h($rols->created) ?></td>
                <td><?= h($rols->user_modified) ?></td>
                <td><?= h($rols->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Rols', 'action' => 'view', $rols->rol_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Rols', 'action' => 'edit', $rols->rol_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Rols', 'action' => 'delete', $rols->rol_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rols->rol_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
