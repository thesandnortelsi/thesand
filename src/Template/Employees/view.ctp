<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Laborregimes'), ['controller' => 'Laborregimes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Laborregime'), ['controller' => 'Laborregimes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Educationalsituations'), ['controller' => 'Educationalsituations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Educationalsituation'), ['controller' => 'Educationalsituations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Activities'), ['controller' => 'Activities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Activity'), ['controller' => 'Activities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracttypes'), ['controller' => 'Contracttypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contracttype'), ['controller' => 'Contracttypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Periodicityremunerations'), ['controller' => 'Periodicityremunerations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Periodicityremuneration'), ['controller' => 'Periodicityremunerations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Situations'), ['controller' => 'Situations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Situation'), ['controller' => 'Situations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Specialsituations'), ['controller' => 'Specialsituations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Specialsituation'), ['controller' => 'Specialsituations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paymenttypes'), ['controller' => 'Paymenttypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paymenttype'), ['controller' => 'Paymenttypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Occupationalcategories'), ['controller' => 'Occupationalcategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Occupationalcategory'), ['controller' => 'Occupationalcategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Doublepayagreements'), ['controller' => 'Doublepayagreements', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Doublepayagreement'), ['controller' => 'Doublepayagreements', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payrolltypes'), ['controller' => 'Payrolltypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payrolltype'), ['controller' => 'Payrolltypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Persons'), ['controller' => 'Persons', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'Persons', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Proyects'), ['controller' => 'Proyects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proyect'), ['controller' => 'Proyects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employeetypes'), ['controller' => 'Employeetypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employeetype'), ['controller' => 'Employeetypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dataafps'), ['controller' => 'Dataafps', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dataafp'), ['controller' => 'Dataafps', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Databanks'), ['controller' => 'Databanks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Databank'), ['controller' => 'Databanks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employees view large-9 medium-8 columns content">
    <h3><?= h($employee->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Laborregime') ?></th>
            <td><?= $employee->has('laborregime') ? $this->Html->link($employee->laborregime->id, ['controller' => 'Laborregimes', 'action' => 'view', $employee->laborregime->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Educationalsituation') ?></th>
            <td><?= $employee->has('educationalsituation') ? $this->Html->link($employee->educationalsituation->id, ['controller' => 'Educationalsituations', 'action' => 'view', $employee->educationalsituation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activity') ?></th>
            <td><?= $employee->has('activity') ? $this->Html->link($employee->activity->id, ['controller' => 'Activities', 'action' => 'view', $employee->activity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cuspp') ?></th>
            <td><?= h($employee->cuspp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contracttype') ?></th>
            <td><?= $employee->has('contracttype') ? $this->Html->link($employee->contracttype->id, ['controller' => 'Contracttypes', 'action' => 'view', $employee->contracttype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodicityremuneration') ?></th>
            <td><?= $employee->has('periodicityremuneration') ? $this->Html->link($employee->periodicityremuneration->id, ['controller' => 'Periodicityremunerations', 'action' => 'view', $employee->periodicityremuneration->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situation') ?></th>
            <td><?= $employee->has('situation') ? $this->Html->link($employee->situation->id, ['controller' => 'Situations', 'action' => 'view', $employee->situation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Specialsituation') ?></th>
            <td><?= $employee->has('specialsituation') ? $this->Html->link($employee->specialsituation->id, ['controller' => 'Specialsituations', 'action' => 'view', $employee->specialsituation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paymenttype') ?></th>
            <td><?= $employee->has('paymenttype') ? $this->Html->link($employee->paymenttype->id, ['controller' => 'Paymenttypes', 'action' => 'view', $employee->paymenttype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupationalcategory') ?></th>
            <td><?= $employee->has('occupationalcategory') ? $this->Html->link($employee->occupationalcategory->id, ['controller' => 'Occupationalcategories', 'action' => 'view', $employee->occupationalcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doublepayagreement') ?></th>
            <td><?= $employee->has('doublepayagreement') ? $this->Html->link($employee->doublepayagreement->id, ['controller' => 'Doublepayagreements', 'action' => 'view', $employee->doublepayagreement->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payrolltype') ?></th>
            <td><?= $employee->has('payrolltype') ? $this->Html->link($employee->payrolltype->id, ['controller' => 'Payrolltypes', 'action' => 'view', $employee->payrolltype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Liquidation Reason') ?></th>
            <td><?= h($employee->liquidation_reason) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Person') ?></th>
            <td><?= $employee->has('person') ? $this->Html->link($employee->person->name, ['controller' => 'Persons', 'action' => 'view', $employee->person->person_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proyect') ?></th>
            <td><?= $employee->has('proyect') ? $this->Html->link($employee->proyect->name, ['controller' => 'Proyects', 'action' => 'view', $employee->proyect->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employeetype') ?></th>
            <td><?= $employee->has('employeetype') ? $this->Html->link($employee->employeetype->id, ['controller' => 'Employeetypes', 'action' => 'view', $employee->employeetype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employee->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disability') ?></th>
            <td><?= $this->Number->format($employee->disability) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sctr Pension') ?></th>
            <td><?= $this->Number->format($employee->sctr_pension) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alternative Regime') ?></th>
            <td><?= $this->Number->format($employee->alternative_regime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Maximum Day') ?></th>
            <td><?= $this->Number->format($employee->maximum_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Night Time') ?></th>
            <td><?= $this->Number->format($employee->night_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Unionized') ?></th>
            <td><?= $this->Number->format($employee->is_unionized) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Basic Remuneration 728') ?></th>
            <td><?= $this->Number->format($employee->basic_remuneration_728) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Income Exonerated 5ta') ?></th>
            <td><?= $this->Number->format($employee->income_exonerated_5ta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $this->Number->format($employee->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Created') ?></th>
            <td><?= $this->Number->format($employee->user_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Modified') ?></th>
            <td><?= $this->Number->format($employee->user_modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Admission Date') ?></th>
            <td><?= h($employee->admission_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Liquidation Date') ?></th>
            <td><?= h($employee->liquidation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($employee->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($employee->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Dataafps') ?></h4>
        <?php if (!empty($employee->dataafps)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cuspp') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Afp Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('User Created') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('User Modified') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->dataafps as $dataafps): ?>
            <tr>
                <td><?= h($dataafps->id) ?></td>
                <td><?= h($dataafps->cuspp) ?></td>
                <td><?= h($dataafps->employee_id) ?></td>
                <td><?= h($dataafps->afp_id) ?></td>
                <td><?= h($dataafps->status) ?></td>
                <td><?= h($dataafps->user_created) ?></td>
                <td><?= h($dataafps->created) ?></td>
                <td><?= h($dataafps->user_modified) ?></td>
                <td><?= h($dataafps->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Dataafps', 'action' => 'view', $dataafps->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Dataafps', 'action' => 'edit', $dataafps->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dataafps', 'action' => 'delete', $dataafps->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dataafps->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Databanks') ?></h4>
        <?php if (!empty($employee->databanks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number Account') ?></th>
                <th scope="col"><?= __('Cci') ?></th>
                <th scope="col"><?= __('Employee Id') ?></th>
                <th scope="col"><?= __('Bank Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('User Created') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('User Modified') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employee->databanks as $databanks): ?>
            <tr>
                <td><?= h($databanks->id) ?></td>
                <td><?= h($databanks->number_account) ?></td>
                <td><?= h($databanks->cci) ?></td>
                <td><?= h($databanks->employee_id) ?></td>
                <td><?= h($databanks->bank_id) ?></td>
                <td><?= h($databanks->status) ?></td>
                <td><?= h($databanks->user_created) ?></td>
                <td><?= h($databanks->created) ?></td>
                <td><?= h($databanks->user_modified) ?></td>
                <td><?= h($databanks->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Databanks', 'action' => 'view', $databanks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Databanks', 'action' => 'edit', $databanks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Databanks', 'action' => 'delete', $databanks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $databanks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
