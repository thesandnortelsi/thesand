<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeeworkinformation[]|\Cake\Collection\CollectionInterface $employeeworkinformations
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
          <h4>Lista de <span class="semi-bold">Trabajadores  
            <?=
            $this->getRequest()->getSession()->read('proyect_name') ? $this->getRequest()->getSession()->read('proyect_name') : '';
            ?>

            <?=
            $this->getRequest()->getSession()->read('proyect_id') ? $this->getRequest()->getSession()->read('proyect_id') : 'None';

            ?>
                
            </span></h4>


          <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#grid-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
            <a href="javascript:;" class="add"></a>
            <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Employeepersonalinformations', 'action' => 'index'], ['escape' => false]) ?>
          </div>
        </div>
        <div class="grid-body ">


        <table class="table table-hover table-condensed" id="example2">
            <thead>
                <tr>
                    <!-- <th>PROYECTO</th> -->
                    <th>DATOS PERSONALES</th>
                    <th>PLANILLA</th>
                    <th>INICIO</th>
                    <th>CARGO/CATEGORIA</th>
                    <th>OCUPACION</th>
                    <th>ESPECIALIDAD</th>
                    <th>AREA</th>
                    <th>ACCIONES</th>

                    <!-- <th><?= $this->Paginator->sort('laborregime_id') ?></th>
                    <th><?= $this->Paginator->sort('educationalsituation_id') ?></th>
                    <th><?= $this->Paginator->sort('activity_id') ?></th>

                    <th><?= $this->Paginator->sort('contracttype_id') ?></th>

                    <th><?= $this->Paginator->sort('periodicityremuneration_id') ?></th>

                    <th><?= $this->Paginator->sort('situation_id') ?></th>

                    <th><?= $this->Paginator->sort('specialsituation_id') ?></th>

                    <th><?= $this->Paginator->sort('occupationalcategory_id') ?></th>

                    <th><?= $this->Paginator->sort('payrolltype_id') ?></th>
                    <th><?= $this->Paginator->sort('admission_date') ?></th>

                    
                    <th><?= $this->Paginator->sort('employeetype_id') ?></th>
                    <th><?= $this->Paginator->sort('position_id') ?></th>
                    <th><?= $this->Paginator->sort('task_id') ?></th>
                    <th><?= $this->Paginator->sort('area_id') ?></th>
                    <th><?= $this->Paginator->sort('speciality_id') ?></th>
                     -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employeeworkinformations as $employeeworkinformation): ?>
                <tr>
                    <!-- <td><?= $employeeworkinformation->has('proyect') ? h($employeeworkinformation->proyect->name) : '' ?></td> -->
                    
                    <td>
                        <?= 
                        $employeeworkinformation->has('employeepersonalinformation') 
                        ? 
                        h($employeeworkinformation->employeepersonalinformation->document.' - '.$employeeworkinformation->employeepersonalinformation->surname_father.' '.$employeeworkinformation->employeepersonalinformation->surname_mother.' '.$employeeworkinformation->employeepersonalinformation->name ) 
                        : 
                        '' 
                        ?>
                    </td>
                    <td><?= $employeeworkinformation->has('payrolltype') ? h($employeeworkinformation->payrolltype->description) : '' ?></td> 
                    <td><?= h($employeeworkinformation->admission_date) ?></td>
                    <td><?= $employeeworkinformation->has('position') ? h($employeeworkinformation->position->name) : '' ?></td>

                    <td><?= $employeeworkinformation->has('task') ? h($employeeworkinformation->task->name) : '' ?></td>
                    <td><?= $employeeworkinformation->has('speciality') ? h($employeeworkinformation->speciality->name) : '' ?></td>
                    <td><?= $employeeworkinformation->has('area') ? h($employeeworkinformation->area->name) : '' ?></td>
                    
                    <!-- <td class="actions"> -->
                        <!-- <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $employeeworkinformation->id], ['escape' => false]) ?> -->
                        
                        <!-- <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $employeeworkinformation->id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $employeeworkinformation->employeepersonalinformation->document.' - '.$employeeworkinformation->employeepersonalinformation->surname_father.' '.$employeeworkinformation->employeepersonalinformation->surname_mother.' '.$employeeworkinformation->employeepersonalinformation->name ), 'escape' => false]) ?> -->

                    <!-- </td> -->
                    <td>
                        <div class="btn-group">
                        <!-- <button class="btn btn-white btn-demo-space">Action</button> -->
                        <button class="btn btn-white dropdown-toggle btn-demo-space" data-toggle="dropdown" aria-expanded="false"> <span class="caret"></span> </button>
                        <ul class="dropdown-menu">
                          <li>
                              <?= $this->Html->link('<i class="material-icons">edit</i> Editar', ['action' => 'edit', $employeeworkinformation->id], ['escape' => false]) ?>
                          </li>
                          <li>
                              <?= $this->Html->link('<i class="material-icons">add</i> Informacion Fammiliar', ['controller'=>'Employeedataaditionals', 'action' => 'add', $employeeworkinformation->id], ['escape' => false]) ?>
                          </li>
                          <li>
                              <?= $this->Html->link('<i class="material-icons">add</i> Editar', ['action' => 'edit', $employeeworkinformation->id], ['escape' => false]) ?>
                          </li>
                        </ul>
                      </div>
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
