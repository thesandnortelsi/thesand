<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Model[]|\Cake\Collection\CollectionInterface $models
 */
?>


<div class="page-title">
    <h3>Modelos </h3>
</div>
<div id="container">


    <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Lista de <span class="semi-bold">Modelos</span></h4>

       
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                    <a href="javascript:;" class="add"></a>
                    <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'models', 'action' => 'add'], ['escape' => false]) ?>
                  </div>
                </div>
                <div class="grid-body ">
                  <table class="table table-hover table-condensed" id="example2">
                    <thead>
                      <tr>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($models as $model): ?>
                            <tr>
                                <td><?= $model->has('manufacturer') ? $this->Html->link($model->manufacturer->name, ['controller' => 'Manufacturers', 'action' => 'view', $model->manufacturer->manufacture_id]) : '' ?></td>
                                <td><?= h($model->name) ?></td>
                                <td><?= h($model->description) ?></td>
                                <td><?= h($model->state) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $model->id], ['escape' => false]) ?>
                                    <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $model->id], ['escape' => false]) ?>
                                    <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $model->id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $model->name), 'escape' => false]) ?>
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