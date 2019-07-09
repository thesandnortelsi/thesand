<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sendingcountry[]|\Cake\Collection\CollectionInterface $sendingcountries
 */
?>


<div class="page-title">
    <h3>Pais emisor</h3>
</div>
<div id="container">


<div class="row-fluid">
    <div class="span12">
      <div class="grid simple ">
        <div class="grid-title">
          <h4>Lista de <span class="semi-bold">Pais emisor</span></h4>


          <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#grid-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
            <a href="javascript:;" class="add"></a>
            <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Sendingcountries', 'action' => 'add'], ['escape' => false]) ?>
          </div>
        </div>
        <div class="grid-body ">


        <table class="table table-hover table-condensed" id="example2">
            <thead>
                <tr>
                    <th>Codigo SUNAT</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($sendingcountries as $sendingcountry): ?>
                <tr>
                    <td><?= h($sendingcountry->code_sunat) ?></td>
                    <td><?= h($sendingcountry->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $sendingcountry->id], ['escape' => false]) ?>
                        <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $sendingcountry->id], ['escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $sendingcountry->id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $sendingcountry->code_sunat.' - '.$sendingcountry->description), 'escape' => false]) ?>

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