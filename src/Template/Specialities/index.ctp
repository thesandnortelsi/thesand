<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Speciality[]|\Cake\Collection\CollectionInterface $specialities
 */
?>
<div class="page-title">
    <h3>Especialidades</h3>
</div>
<div id="container">


    <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Lista de <span class="semi-bold">Especialidades</span></h4>

       
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                    <a href="javascript:;" class="add"></a>
                    <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Specialities', 'action' => 'add'], ['escape' => false]) ?>
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
                        <?php foreach ($specialities as $speciality): ?>
                        <tr>
                            <td><?= h($speciality->name) ?></td>
                            <td class="actions">
                                <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $speciality->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $speciality->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $speciality->id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $speciality->name), 'escape' => false]) ?>

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