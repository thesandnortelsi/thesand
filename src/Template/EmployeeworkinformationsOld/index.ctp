<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeeworkinformation[]|\Cake\Collection\CollectionInterface $employeeworkinformations
 */
?>



<div class="page-title">
    <h3>Trabajadores - Informacion laboral</h3>
</div>
<div id="container">


<div class="row-fluid">
    <div class="span12">
      <div class="grid simple ">
        <div class="grid-title">
          <h4>Lista de <span class="semi-bold">Trabajadores - Informacion laboral</span></h4>


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
                    <th>PROYECTO</th>
                    <th>DATOS PERSONALES</th>

                    <th><?= $this->Paginator->sort('laborregime_id') ?></th>
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
                    
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employeeworkinformations as $employeeworkinformation): ?>
                <tr>
                    <td><?= $employeeworkinformation->has('proyect') ? h($employeeworkinformation->proyect->name) : '' ?></td>
                    
                    <td>
                        <?= $employeeworkinformation->has('employeepersonalinformation') ? h($employeeworkinformation->employeepersonalinformation->name) : h($employeeworkinformation->employeepersonalinformation->name) ?>

                        <?= $this->Number->format($employeeworkinformation->employeepersonalinformation_id) ?>
                            
                        </td>




                    <td><?= $employeeworkinformation->has('laborregime') ? $this->Html->link($employeeworkinformation->laborregime->id, ['controller' => 'Laborregimes', 'action' => 'view', $employeeworkinformation->laborregime->id]) : '' ?></td>
                    <td><?= $employeeworkinformation->has('educationalsituation') ? $this->Html->link($employeeworkinformation->educationalsituation->id, ['controller' => 'Educationalsituations', 'action' => 'view', $employeeworkinformation->educationalsituation->id]) : '' ?></td>
                    <td><?= $employeeworkinformation->has('activity') ? $this->Html->link($employeeworkinformation->activity->id, ['controller' => 'Activities', 'action' => 'view', $employeeworkinformation->activity->id]) : '' ?></td>

                    <td><?= $employeeworkinformation->has('contracttype') ? $this->Html->link($employeeworkinformation->contracttype->id, ['controller' => 'Contracttypes', 'action' => 'view', $employeeworkinformation->contracttype->id]) : '' ?></td>



                    <td><?= $employeeworkinformation->has('periodicityremuneration') ? $this->Html->link($employeeworkinformation->periodicityremuneration->id, ['controller' => 'Periodicityremunerations', 'action' => 'view', $employeeworkinformation->periodicityremuneration->id]) : '' ?></td>

                    <td><?= $employeeworkinformation->has('situation') ? $this->Html->link($employeeworkinformation->situation->id, ['controller' => 'Situations', 'action' => 'view', $employeeworkinformation->situation->id]) : '' ?></td>

                    <td><?= $employeeworkinformation->has('specialsituation') ? $this->Html->link($employeeworkinformation->specialsituation->id, ['controller' => 'Specialsituations', 'action' => 'view', $employeeworkinformation->specialsituation->id]) : '' ?></td>
                    
                    <td><?= $employeeworkinformation->has('occupationalcategory') ? $this->Html->link($employeeworkinformation->occupationalcategory->id, ['controller' => 'Occupationalcategories', 'action' => 'view', $employeeworkinformation->occupationalcategory->id]) : '' ?></td>
                    
                    <td><?= $employeeworkinformation->has('payrolltype') ? $this->Html->link($employeeworkinformation->payrolltype->id, ['controller' => 'Payrolltypes', 'action' => 'view', $employeeworkinformation->payrolltype->id]) : '' ?></td>
                    <td><?= h($employeeworkinformation->admission_date) ?></td>

                    
                    <td><?= $employeeworkinformation->has('employeetype') ? $this->Html->link($employeeworkinformation->employeetype->id, ['controller' => 'Employeetypes', 'action' => 'view', $employeeworkinformation->employeetype->id]) : '' ?></td>
                    <td><?= $employeeworkinformation->has('position') ? $this->Html->link($employeeworkinformation->position->name, ['controller' => 'Positions', 'action' => 'view', $employeeworkinformation->position->id]) : '' ?></td>
                    <td><?= $employeeworkinformation->has('task') ? $this->Html->link($employeeworkinformation->task->name, ['controller' => 'Tasks', 'action' => 'view', $employeeworkinformation->task->id]) : '' ?></td>
                    <td><?= $employeeworkinformation->has('area') ? $this->Html->link($employeeworkinformation->area->name, ['controller' => 'Areas', 'action' => 'view', $employeeworkinformation->area->id]) : '' ?></td>
                    <td><?= $employeeworkinformation->has('speciality') ? $this->Html->link($employeeworkinformation->speciality->name, ['controller' => 'Specialities', 'action' => 'view', $employeeworkinformation->speciality->id]) : '' ?></td>
                    
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $employeeworkinformation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employeeworkinformation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employeeworkinformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeworkinformation->id)]) ?>
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




<div class="employeeworkinformations index large-9 medium-8 columns content">
    <h3><?= __('Employeeworkinformations') ?></h3>
    
</div>
