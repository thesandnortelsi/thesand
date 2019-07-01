<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="page-title">
    <h3>Usuarios </h3>
</div>
<div id="container">


    <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Lista de <span class="semi-bold">Usuarios</span></h4>

       
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                    <a href="javascript:;" class="add"></a>
                    <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Users', 'action' => 'add'], ['escape' => false]) ?>
                  </div>
                </div>
                <div class="grid-body ">
                  <table class="table table-hover table-condensed" id="example2">
                    <thead>
                      <tr>
                        <th>Personal</th>
                        <th>Usuario</th>
                        <th>Fecha Creación</th>
                        <th>Fecha Modificación</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($users as $user): ?>
                            <tr>
                                <td><?= $user->has('person') ? $this->Html->link($user->person->name, ['controller' => 'Persons', 'action' => 'view', $user->person->person_id]) : '' ?></td>
                                
                                <td><?= h($user->username) ?></td>
                                <td><?= h($user->created) ?></td>
                                <td><?= h($user->modified) ?></td>
                                <td><?= h($user->state) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $user->id], ['escape' => false]) ?>
                                    <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $user->id], ['escape' => false]) ?>
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
