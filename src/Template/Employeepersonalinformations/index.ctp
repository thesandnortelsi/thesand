<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeepersonalinformation[]|\Cake\Collection\CollectionInterface $employeepersonalinformations
 */
?>


<div class="page-title">
    <h3>Informacion personal</h3>
</div>
<div id="container">


<div class="row-fluid">
    <div class="span12">
      <div class="grid simple ">
        <div class="grid-title">
          <h4><span class="semi-bold">Informacion personal</span></h4>


          <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#grid-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
            <a href="javascript:;" class="add"></a>
            <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Employeepersonalinformations', 'action' => 'add'], ['escape' => false]) ?>
          </div>
        </div>
        <div class="grid-body ">


        <table class="table table-hover table-condensed" id="example2">
            <thead>
                <tr>
                    <!-- <th>Proyecto</th> -->
                    <th>Tipo documento</th>
                    <th>Documento</th>
                    <th>Nombres</th>
                    <th>Sexo</th>
                    <th>Dirección</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employeepersonalinformations as $employeepersonalinformation): ?>
                <tr>
                    <td>
                        <?= 
                        //$employeepersonalinformation->has('documenttype') ? $this->Html->link($employeepersonalinformation->documenttype->abbreviated_description, ['controller' => 'Documenttypes', 'action' => 'view', $employeepersonalinformation->documenttype->id]) : ''

                        $employeepersonalinformation->has('documenttype') ? h($employeepersonalinformation->documenttype->abbreviated_description) : ''

                        ?>
                    </td>
                    <td><?= h($employeepersonalinformation->document) ?></td>
                    <td><?= h($employeepersonalinformation->surname_father.' '.$employeepersonalinformation->surname_mother.' '.$employeepersonalinformation->name) ?></t>
                    <td><?= h($employeepersonalinformation->gender) ?></td>
                    <td><?= h($employeepersonalinformation->document) ?></td>
                    <td><?= h($employeepersonalinformation->email) ?></td>
                    <td><?= h($employeepersonalinformation->phone) ?></td>
                    <td class="actions">
                        <!-- <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $employeepersonalinformation->id], ['escape' => false]) ?> -->
                        <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $employeepersonalinformation->id], ['escape' => false]) ?>
                        <!-- <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $employeepersonalinformation->id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $employeepersonalinformation->document.' - '.$employeepersonalinformation->surname_father.' '.$employeepersonalinformation->surname_mother.' '.$employeepersonalinformation->name), 'escape' => false]) ?> -->
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


        <form action="" class="row">
            <div class="form-group pull-right">
                <?= $this->Html->link('Regresar', ['controller' => 'Employeeworkinformations', 'action' => 'index'], ['class' => 'btn btn-info btn-cons']) ?>
            </div>
        </form>

        </div>
      </div>
    </div>
  </div>

</div>