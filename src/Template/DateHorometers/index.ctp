<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Datehorometer[]|\Cake\Collection\CollectionInterface $datehorometers
 */
?>
<div class="page-title">
    <h3>Horómetros </h3>
</div>
<div id="container">


    <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Lista de <span class="semi-bold">Horómetros</span></h4>

       
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                    <a href="javascript:;" class="add"></a>
                    <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'datehorometers', 'action' => 'add'], ['escape' => false]) ?>
                  </div>
                </div>
                <div class="grid-body ">
                  <table class="table table-hover table-condensed" id="example2">
                    <thead>
                      <tr>
                        <th>Fecha</th>
                        <th>Fecha Creó</th>
                        <th>Fecha Modificó</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($datehorometers as $datehorometer): ?>
                            <tr>
                                <td><?= h($datehorometer->date) ?></td>
                                <td><?= h($datehorometer->created) ?></td>
                                <td><?= h($datehorometer->modified) ?></td>
                                <td class="actions">
                                    <!-- <?= $this->Html->link(__('Ver'), ['action' => 'view', $datehorometer->id]) ?> -->
                                    <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $datehorometer->id], ['escape' => false]) ?>
                                    <!-- <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $datehorometer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $datehorometer->id)]) ?> -->
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
