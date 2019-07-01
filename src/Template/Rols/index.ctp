<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Rol[]|\Cake\Collection\CollectionInterface $rols
 */
?>
<div class="page-title">
    <h3>Roles </h3>
</div>
<div id="container">


    <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Lista de <span class="semi-bold">Roles</span></h4>

       
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                    <a href="javascript:;" class="add"></a>
                    <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Rols', 'action' => 'add'], ['escape' => false]) ?>
                  </div>
                </div>
                <div class="grid-body ">
                  <table class="table table-hover table-condensed" id="example2">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Fecha Modificación</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($rols as $rol): ?>
                            <tr>
                                <td><?= h($rol->name) ?></td>
                                <td><?= h($rol->state) ?></td>
                                <td><?= h($rol->modified) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $rol->id], ['escape' => false]) ?>
                                    <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $rol->id], ['escape' => false]) ?>
                                    <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $rol->id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $rol->name), 'escape' => false]) ?>
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
