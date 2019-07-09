<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Afp[]|\Cake\Collection\CollectionInterface $afps
 */
?>

<div class="page-title">
    <h3>Afps</h3>
</div>
<div id="container">


    <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Lista de <span class="semi-bold">Afps</span></h4>

       
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                    <a href="javascript:;" class="add"></a>
                    <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Afps', 'action' => 'add'], ['escape' => false]) ?>
                  </div>
                </div>
                <div class="grid-body ">


                <table class="table table-hover table-condensed" id="example2">
                    <thead>
                        <tr>
                            <th>Descripcion</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($afps as $afp): ?>
                        <tr>
                            <td><?= h($afp->description) ?></td>
                            <td class="actions">
                                <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $afp->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $afp->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $afp->id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $afp->description), 'escape' => false]) ?>

                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

                </div>
              </div>
            </div>
          </div>


</div>

<!-- 

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Afp'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dataafps'), ['controller' => 'Dataafps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dataafp'), ['controller' => 'Dataafps', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="afps index large-9 medium-8 columns content">
    <h3><?= __('Afps') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($afps as $afp): ?>
            <tr>
                <td><?= $this->Number->format($afp->id) ?></td>
                <td><?= h($afp->description) ?></td>
                <td><?= $this->Number->format($afp->user_created) ?></td>
                <td><?= h($afp->created) ?></td>
                <td><?= $this->Number->format($afp->user_modified) ?></td>
                <td><?= h($afp->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $afp->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $afp->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $afp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $afp->id)]) ?>
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