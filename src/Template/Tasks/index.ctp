<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Task[]|\Cake\Collection\CollectionInterface $tasks
 */
?>

<div class="page-title">
    <h3>Ocupaciones</h3>
</div>
<div id="container">


    <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Lista de <span class="semi-bold">Ocupaciones</span></h4>

       
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                    <a href="javascript:;" class="add"></a>
                    <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Tasks', 'action' => 'add'], ['escape' => false]) ?>
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
                        <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?= h($task->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $task->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $task->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $task->id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $task->name), 'escape' => false]) ?>

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