<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Occupationalcategory[]|\Cake\Collection\CollectionInterface $occupationalcategories
 */
?>
<div class="page-title">
    <h3>Categorias ocupacionales</h3>
</div>
<div id="container">


<div class="row-fluid">
    <div class="span12">
      <div class="grid simple ">
        <div class="grid-title">
          <h4>Lista de <span class="semi-bold">Categorias ocupacionales</span></h4>


          <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#grid-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
            <a href="javascript:;" class="add"></a>
            <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Occupationalcategories', 'action' => 'add'], ['escape' => false]) ?>
          </div>
        </div>
        <div class="grid-body ">


        <table class="table table-hover table-condensed" id="example2">
            <thead>
                <tr>
                    <th>Codigo SUNAT</th>
                    <th>Descripcion</th>
                    <!-- <th>Descripcion Abreviada</th> -->
                    <th>Sector privado</th>
                    <th>Sector publico</th>
                    <th>Otras entidades</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($occupationalcategories as $occupationalcategory): ?>
                <tr>
                    <td><?= h($occupationalcategory->code_sunat) ?></td>
                    <td><?= h($occupationalcategory->description) ?></td>
                    <!-- <td><?= h($occupationalcategory->abbreviated_description) ?></td> -->
                    <td><?= h($occupationalcategory->private_sector) ?></td>
                    <td><?= h($occupationalcategory->public_sector) ?></td>
                    <td><?= h($occupationalcategory->other_entities) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $occupationalcategory->id], ['escape' => false]) ?>
                        <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $occupationalcategory->id], ['escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $occupationalcategory->id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $occupationalcategory->code_sunat.' - '.$occupationalcategory->description), 'escape' => false]) ?>

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
