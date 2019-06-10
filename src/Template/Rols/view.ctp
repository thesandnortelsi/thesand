<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rol $rol
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Opciones') ?></li>
        <li><?= $this->Html->link(__('Editar Rol'), ['action' => 'edit', $rol->rol_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Rol'), ['action' => 'delete', $rol->rol_id], ['confirm' => __('Are you sure you want to delete # {0}?', $rol->rol_id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Rols'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Rol'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista Funcionalidades'), ['controller' => 'Functionalities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Funcionalidad'), ['controller' => 'Functionalities', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="rols view large-9 medium-8 columns content">
    <h3><?= h($rol->name) ?></h3>
    <table class="vertical-table">
         <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($rol->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estado') ?></th>
            <td><?= h($rol->state) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Rol Id') ?></th>
            <td><?= $this->Number->format($rol->rol_id) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Usuario Creó') ?></th>
            <td><?php if(!empty($creo)) { echo $creo->username; }  ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Creación') ?></th>
            <td><?= h($rol->created) ?></td>
        </tr>

        <tr>
            <th scope="row"><?= __('Usuario Modificó') ?></th>
            <td><?php if(!empty($modifico)) { echo $modifico->username; }  ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Fecha Modificación') ?></th>
            <td><?= h($rol->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Relación de Functionalidades') ?></h4>
        <?php if (!empty($rol->functionalities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Descripción') ?></th>
                <th scope="col"><?= __('Estado') ?></th>
                <th scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
            <?php foreach ($rol->functionalities as $functionalities): ?>
            <tr>
                <!-- <td><?= h($functionalities->functionality_id) ?></td> -->
                <td><?= h($functionalities->name) ?></td>
                <td><?= h($functionalities->description) ?></td>
                <td><?= h($functionalities->state) ?></td>
                <!-- <td><?= h($functionalities->user_modified) ?></td>
                <td><?= h($functionalities->modified) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Functionalities', 'action' => 'view', $functionalities->functionality_id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Functionalities', 'action' => 'edit', $functionalities->functionality_id]) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Functionalities', 'action' => 'delete', $functionalities->functionality_id], ['confirm' => __('Are you sure you want to delete # {0}?', $functionalities->functionality_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
