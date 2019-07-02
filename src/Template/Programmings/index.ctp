<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programming[]|\Cake\Collection\CollectionInterface $programmings
 */
?>
<div class="page-title">
    <h3>Mantenimientos Preventivos</h3>
</div>
<div id="container">


    <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Lista de <span class="semi-bold">Programación de Mantenimientos Preventivos</span></h4>

       
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                    <a href="javascript:;" class="add"></a>
                    <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Programmings', 'action' => 'add'], ['escape' => false]) ?>
                  </div>
                </div>
                <div class="grid-body ">
                  <table class="table table-hover table-condensed" id="example2">
                    <thead>
                      <tr>
                        <th>Año</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


</div>


<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Programming'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Machines'), ['controller' => 'Machines', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Machine'), ['controller' => 'Machines', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="programmings index large-9 medium-8 columns content">
    <h3><?= __('Programmings') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('machine_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('year') ?></th>
                <th scope="col"><?= $this->Paginator->sort('month') ?></th>
                <th scope="col"><?= $this->Paginator->sort('day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horometer_estimated') ?></th>
                <th scope="col"><?= $this->Paginator->sort('horometer_mantenaice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($programmings as $programming): ?>
            <tr>
                <td><?= $this->Number->format($programming->id) ?></td>
                <td><?= $programming->has('machine') ? $this->Html->link($programming->machine->name, ['controller' => 'Machines', 'action' => 'view', $programming->machine->id]) : '' ?></td>
                <td><?= h($programming->date) ?></td>
                <td><?= h($programming->year) ?></td>
                <td><?= h($programming->month) ?></td>
                <td><?= h($programming->day) ?></td>
                <td><?= $this->Number->format($programming->position) ?></td>
                <td><?= $this->Number->format($programming->horometer_estimated) ?></td>
                <td><?= $this->Number->format($programming->horometer_mantenaice) ?></td>
                <td><?= $this->Number->format($programming->user_created) ?></td>
                <td><?= h($programming->created) ?></td>
                <td><?= $this->Number->format($programming->user_modified) ?></td>
                <td><?= h($programming->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $programming->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $programming->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $programming->id], ['confirm' => __('Are you sure you want to delete # {0}?', $programming->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
 -->