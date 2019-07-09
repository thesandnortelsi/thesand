<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee[]|\Cake\Collection\CollectionInterface $employees
 */
?>



<div class="page-title">
    <h3>Empleados</h3>
</div>
<div id="container">


    <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Lista de <span class="semi-bold">Empleados</span></h4>

       
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                    <a href="javascript:;" class="add"></a>
                    <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Employees', 'action' => 'add'], ['escape' => false]) ?>
                  </div>
                </div>
                <div class="grid-body ">


                <table class="table table-hover table-condensed" id="example2">
                    <thead>
                        <tr>
                            <th>PROYECTO</th>
                            <th>PLANILLA</th>
                            <th>TIPO DOCUMENTO</th>
                            <th>NRO DOCUMENTO</th>
                            <th>APELLIDO PATERNO</th>
                            <th>APELLIDO MATERNO</th>
                            <th>NOMBRES</th>
                            <th>ACCIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($employees as $employee): ?>
                        <tr>
                            <td><?= $employee->has('proyect') ? $this->Html->link($employee->proyect->name, ['controller' => 'Proyect', 'action' => 'view', $employee->proyect->proyect_id]) : '' ?></td>

                            <td><?= $employee->has('payrolltype') ? h($employee->payrolltype->description) : '' ?></td>

                            <td><?= $employee->has('person') ? h($employee->person->type_document) : '' ?></td>
                            <td><?= $employee->has('person') ? $this->Html->link($employee->person->document, ['controller' => 'Persons', 'action' => 'view', $employee->person->person_id]) : '' ?></td>
                            <td><?= $employee->has('person') ? h($employee->person->surname_father) : '' ?></td>
                            <td><?= $employee->has('person') ? h($employee->person->surname_mother) : '' ?></td>
                            <td><?= $employee->has('person') ? h($employee->person->name) : '' ?></td>

                            <td class="actions">

                                <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $employee->id], ['escape' => false]) ?>
                                <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $employee->id], ['escape' => false]) ?>
                                <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $employee->id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $employee->person->document.' - '.$employee->person->surname_father.' '.$employee->person->surname_mother.' '.$employee->person->name), 'escape' => false]) ?>

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



<!-- <div class="employees index large-9 medium-8 columns content">
    <h3><?= __('Employees') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employees as $employee): ?>
            <tr>
                <td><?= $employee->has('laborregime') ? $this->Html->link($employee->laborregime->id, ['controller' => 'Laborregimes', 'action' => 'view', $employee->laborregime->id]) : '' ?></td>
                <td><?= $employee->has('educationalsituation') ? $this->Html->link($employee->educationalsituation->id, ['controller' => 'Educationalsituations', 'action' => 'view', $employee->educationalsituation->id]) : '' ?></td>
                <td><?= $employee->has('activity') ? $this->Html->link($employee->activity->id, ['controller' => 'Activities', 'action' => 'view', $employee->activity->id]) : '' ?></td>
                <td><?= $this->Number->format($employee->disability) ?></td>
                <td><?= h($employee->cuspp) ?></td>
                <td><?= $this->Number->format($employee->sctr_pension) ?></td>
                <td><?= $employee->has('contracttype') ? $this->Html->link($employee->contracttype->id, ['controller' => 'Contracttypes', 'action' => 'view', $employee->contracttype->id]) : '' ?></td>
                <td><?= $this->Number->format($employee->alternative_regime) ?></td>
                <td><?= $this->Number->format($employee->maximum_day) ?></td>
                <td><?= $this->Number->format($employee->night_time) ?></td>
                <td><?= $this->Number->format($employee->is_unionized) ?></td>
                <td><?= $employee->has('periodicityremuneration') ? $this->Html->link($employee->periodicityremuneration->id, ['controller' => 'Periodicityremunerations', 'action' => 'view', $employee->periodicityremuneration->id]) : '' ?></td>
                <td><?= $this->Number->format($employee->basic_remuneration_728) ?></td>
                <td><?= $employee->has('situation') ? $this->Html->link($employee->situation->id, ['controller' => 'Situations', 'action' => 'view', $employee->situation->id]) : '' ?></td>
                <td><?= $this->Number->format($employee->income_exonerated_5ta) ?></td>
                <td><?= $employee->has('specialsituation') ? $this->Html->link($employee->specialsituation->id, ['controller' => 'Specialsituations', 'action' => 'view', $employee->specialsituation->id]) : '' ?></td>
                <td><?= $employee->has('paymenttype') ? $this->Html->link($employee->paymenttype->id, ['controller' => 'Paymenttypes', 'action' => 'view', $employee->paymenttype->id]) : '' ?></td>
                <td><?= $employee->has('occupationalcategory') ? $this->Html->link($employee->occupationalcategory->id, ['controller' => 'Occupationalcategories', 'action' => 'view', $employee->occupationalcategory->id]) : '' ?></td>
                <td><?= $employee->has('doublepayagreement') ? $this->Html->link($employee->doublepayagreement->id, ['controller' => 'Doublepayagreements', 'action' => 'view', $employee->doublepayagreement->id]) : '' ?></td>
                <td><?= $employee->has('payrolltype') ? $this->Html->link($employee->payrolltype->id, ['controller' => 'Payrolltypes', 'action' => 'view', $employee->payrolltype->id]) : '' ?></td>
                <td><?= h($employee->admission_date) ?></td>
                <td><?= $this->Number->format($employee->state) ?></td>
                <td><?= h($employee->liquidation_date) ?></td>
                <td><?= h($employee->liquidation_reason) ?></td>
                <td><?= $employee->has('person') ? $this->Html->link($employee->person->name, ['controller' => 'Persons', 'action' => 'view', $employee->person->person_id]) : '' ?></td>
                <td><?= $employee->has('proyect') ? $this->Html->link($employee->proyect->name, ['controller' => 'Proyects', 'action' => 'view', $employee->proyect->id]) : '' ?></td>
                <td><?= $employee->has('employeetype') ? $this->Html->link($employee->employeetype->id, ['controller' => 'Employeetypes', 'action' => 'view', $employee->employeetype->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employee->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div> -->
