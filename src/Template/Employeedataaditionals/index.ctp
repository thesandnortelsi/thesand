<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeedataaditional[]|\Cake\Collection\CollectionInterface $employeedataaditionals
 */
?>


<div class="page-title">
    <h3>Trabajadores</h3>
</div>
<div id="container">


<div class="row-fluid">
    <div class="span12">
      <div class="grid simple ">
        <div class="grid-title">
          <h4><span class="semi-bold">Información adicional</span></h4>


          <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#grid-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
            <a href="javascript:;" class="add"></a>
            <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Employeedataaditionals', 'action' => 'add'], ['escape' => false]) ?>
          </div>
        </div>
        <div class="grid-body ">



        <table class="table table-hover table-condensed" id="example2">
            <thead>
                <tr>
                    <th>DOCUMENTO</th>
                    <th>NOMBRES</th>
                    <th>SEXO</th>
                    <th>RELACION</th>
                    <th>HIJO EN EDAD ESCOLAR</th>
                    <th>CARGA FAMILAR</th>
                    <th>ESTADO</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employeedataaditionals as $employeedataaditional): ?>
                <tr>
                    <td>
                    <?= 
                    $employeedataaditional->has('documenttype') 
                    ? 
                    h($employeedataaditional->documenttype->abbreviated_description.' '.$employeedataaditional->documentnumber) 
                    : 
                    h($employeedataaditional->documentnumber) 
                    ?>
                    </td>

                    <!-- <td>
                    <?= 
                    $employeedataaditional->has('employeeworkinformation') 
                    ? 
                    h($employeedataaditional->employeeworkinformation->id) 
                    : 
                    '' 
                    ?>
                    </td> -->

                    <td><?= h($employeedataaditional->surname_father.' '.$employeedataaditional->surname_mother.' '.$employeedataaditional->name) ?></td>
                    <td><?= h($employeedataaditional->gender) ?></td>
                    <td><?= h($employeedataaditional->relationship) ?></td>
                    <td><?= $this->Number->format($employeedataaditional->children_school_age) ?></td>
                    <td><?= $this->Number->format($employeedataaditional->family_burden) ?></td>
                    <td><?= $this->Number->format($employeedataaditional->status) ?></td>

                    <td class="actions">
                       <!--  <?= $this->Html->link(__('View'), ['action' => 'view', $employeedataaditional->id]) ?> -->
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $employeedataaditional->id]) ?>
                        <!-- <?= $this->Form->postLink(__('Inactivar'), ['action' => 'delete', $employeedataaditional->id], ['confirm' => __('Esta seguro que desea inactivar el registro # {0}?', $employeedataaditional->documentnumber.' - '.$employeedataaditional->surname_father.' '.$employeedataaditional->surname_mother.' '.$employeedataaditional->name)]) ?> -->

                        <?= $this->Form->postLink(__('Inactivar'), ['action' => 'inactive', $employeedataaditional->id], ['confirm' => __('Esta seguro que desea inactivar el registro # {0}?', $employeedataaditional->documentnumber.' - '.$employeedataaditional->surname_father.' '.$employeedataaditional->surname_mother.' '.$employeedataaditional->name)]) ?>
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
