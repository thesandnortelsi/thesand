<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Functionality[]|\Cake\Collection\CollectionInterface $functionalities
 */
?>
<div class="page-title">
    <h3>Funcionalidades </h3>
</div>
<div id="container">


    <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Lista de <span class="semi-bold">Funcionalidades</span></h4>

       
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                    <a href="javascript:;" class="add"></a>
                    <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Machines', 'action' => 'add'], ['escape' => false]) ?>
                  </div>
                </div>
                <div class="grid-body ">
                  <table class="table table-hover table-condensed" id="example2">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Fecha Modificación</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($functionalities as $functionality): ?>
                            <tr>
                                <td><?= h($functionality->name) ?></td>
                                <td><?= h($functionality->description) ?></td>
                                
                                <td><?= h($functionality->modified) ?></td>
                                <td><?= h($functionality->state) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $functionality->id], ['escape' => false]) ?>
                                    <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $functionality->id], ['escape' => false]) ?>
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
