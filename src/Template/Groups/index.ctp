<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group[]|\Cake\Collection\CollectionInterface $groups
 */
?>

<div class="page-title">
    <h3>Lineas </h3>
</div>
<div id="container">


    <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Lista de <span class="semi-bold">Lineas</span></h4>

       
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                    <a href="javascript:;" class="add"></a>
                    <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Groups', 'action' => 'add'], ['escape' => false]) ?>
                  </div>
                </div>
                <div class="grid-body ">
                  <table class="table table-hover table-condensed" id="example2">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($groups as $group): ?>
                            <tr>
                                <td><?= h($group->name) ?></td>
                                <td><?= h($group->description) ?></td>
                                <td><?= h($group->state) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $group->id], ['escape' => false]) ?>
                                    <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $group->id], ['escape' => false]) ?>
                                    <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $group->id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $group->name), 'escape' => false]) ?>
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

