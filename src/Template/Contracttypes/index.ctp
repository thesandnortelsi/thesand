<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contracttype[]|\Cake\Collection\CollectionInterface $contracttypes
 */
?>

<div class="page-title">
    <h3>Tipos de contrato</h3>
</div>
<div id="container">


<div class="row-fluid">
    <div class="span12">
      <div class="grid simple ">
        <div class="grid-title">
          <h4>Lista de <span class="semi-bold">Tipos de contrato</span></h4>


          <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#grid-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
            <a href="javascript:;" class="add"></a>
            <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Contracttypes', 'action' => 'add'], ['escape' => false]) ?>
          </div>
        </div>
        <div class="grid-body ">


        <table class="table table-hover table-condensed" id="example2">
            <thead>
                <tr>
                    <th>Codigo SUNAT</th>
                    <th>Descripcion</th>
                    <th>Descripcion Abreviada</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contracttypes as $contracttype): ?>
                <tr>
                    <td><?= h($contracttype->code_sunat) ?></td>
                    <td><?= h($contracttype->description) ?></td>
                    <td><?= h($contracttype->abbreviated_description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $contracttype->id], ['escape' => false]) ?>
                        <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $contracttype->id], ['escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $contracttype->id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $contracttype->code_sunat.' - '.$contracttype->description), 'escape' => false]) ?>

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
