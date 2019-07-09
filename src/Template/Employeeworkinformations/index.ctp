<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeeworkinformation[]|\Cake\Collection\CollectionInterface $employeeworkinformations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employeeworkinformation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Laborregimes'), ['controller' => 'Laborregimes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Laborregime'), ['controller' => 'Laborregimes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Educationalsituations'), ['controller' => 'Educationalsituations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Educationalsituation'), ['controller' => 'Educationalsituations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Activities'), ['controller' => 'Activities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Activity'), ['controller' => 'Activities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracttypes'), ['controller' => 'Contracttypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contracttype'), ['controller' => 'Contracttypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Periodicityremunerations'), ['controller' => 'Periodicityremunerations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Periodicityremuneration'), ['controller' => 'Periodicityremunerations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Situations'), ['controller' => 'Situations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Situation'), ['controller' => 'Situations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Specialsituations'), ['controller' => 'Specialsituations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Specialsituation'), ['controller' => 'Specialsituations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paymenttypes'), ['controller' => 'Paymenttypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paymenttype'), ['controller' => 'Paymenttypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Occupationalcategories'), ['controller' => 'Occupationalcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Occupationalcategory'), ['controller' => 'Occupationalcategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Doublepayagreements'), ['controller' => 'Doublepayagreements', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Doublepayagreement'), ['controller' => 'Doublepayagreements', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payrolltypes'), ['controller' => 'Payrolltypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payrolltype'), ['controller' => 'Payrolltypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proyects'), ['controller' => 'Proyects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proyect'), ['controller' => 'Proyects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employeetypes'), ['controller' => 'Employeetypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employeetype'), ['controller' => 'Employeetypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Specialities'), ['controller' => 'Specialities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Speciality'), ['controller' => 'Specialities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employeepersonalinformations'), ['controller' => 'Employeepersonalinformations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employeepersonalinformation'), ['controller' => 'Employeepersonalinformations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dataafps'), ['controller' => 'Dataafps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dataafp'), ['controller' => 'Dataafps', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Databanks'), ['controller' => 'Databanks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Databank'), ['controller' => 'Databanks', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payrolldetails'), ['controller' => 'Payrolldetails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payrolldetail'), ['controller' => 'Payrolldetails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Residencecontrols'), ['controller' => 'Residencecontrols', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Residencecontrol'), ['controller' => 'Residencecontrols', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employeeworkinformations index large-9 medium-8 columns content">
    <h3><?= __('Employeeworkinformations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('laborregime_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('educationalsituation_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activity_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disability') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cuspp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sctr_pension') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contracttype_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alternative_regime') ?></th>
                <th scope="col"><?= $this->Paginator->sort('maximum_day') ?></th>
                <th scope="col"><?= $this->Paginator->sort('night_time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('is_unionized') ?></th>
                <th scope="col"><?= $this->Paginator->sort('periodicityremuneration_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('basic_remuneration_728') ?></th>
                <th scope="col"><?= $this->Paginator->sort('situation_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('income_exonerated_5ta') ?></th>
                <th scope="col"><?= $this->Paginator->sort('specialsituation_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paymenttype_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('occupationalcategory_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('doublepayagreement_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payrolltype_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('admission_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('liquidation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('liquidation_reason') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('proyect_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employeetype_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('task_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('speciality_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('employeepersonalinformation_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ruc') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employeeworkinformations as $employeeworkinformation): ?>
            <tr>
                <td><?= $this->Number->format($employeeworkinformation->id) ?></td>
                <td><?= $employeeworkinformation->has('laborregime') ? $this->Html->link($employeeworkinformation->laborregime->id, ['controller' => 'Laborregimes', 'action' => 'view', $employeeworkinformation->laborregime->id]) : '' ?></td>
                <td><?= $employeeworkinformation->has('educationalsituation') ? $this->Html->link($employeeworkinformation->educationalsituation->id, ['controller' => 'Educationalsituations', 'action' => 'view', $employeeworkinformation->educationalsituation->id]) : '' ?></td>
                <td><?= $employeeworkinformation->has('activity') ? $this->Html->link($employeeworkinformation->activity->id, ['controller' => 'Activities', 'action' => 'view', $employeeworkinformation->activity->id]) : '' ?></td>
                <td><?= $this->Number->format($employeeworkinformation->disability) ?></td>
                <td><?= h($employeeworkinformation->cuspp) ?></td>
                <td><?= $this->Number->format($employeeworkinformation->sctr_pension) ?></td>
                <td><?= $employeeworkinformation->has('contracttype') ? $this->Html->link($employeeworkinformation->contracttype->id, ['controller' => 'Contracttypes', 'action' => 'view', $employeeworkinformation->contracttype->id]) : '' ?></td>
                <td><?= $this->Number->format($employeeworkinformation->alternative_regime) ?></td>
                <td><?= $this->Number->format($employeeworkinformation->maximum_day) ?></td>
                <td><?= $this->Number->format($employeeworkinformation->night_time) ?></td>
                <td><?= $this->Number->format($employeeworkinformation->is_unionized) ?></td>
                <td><?= $employeeworkinformation->has('periodicityremuneration') ? $this->Html->link($employeeworkinformation->periodicityremuneration->id, ['controller' => 'Periodicityremunerations', 'action' => 'view', $employeeworkinformation->periodicityremuneration->id]) : '' ?></td>
                <td><?= $this->Number->format($employeeworkinformation->basic_remuneration_728) ?></td>
                <td><?= $employeeworkinformation->has('situation') ? $this->Html->link($employeeworkinformation->situation->id, ['controller' => 'Situations', 'action' => 'view', $employeeworkinformation->situation->id]) : '' ?></td>
                <td><?= $this->Number->format($employeeworkinformation->income_exonerated_5ta) ?></td>
                <td><?= $employeeworkinformation->has('specialsituation') ? $this->Html->link($employeeworkinformation->specialsituation->id, ['controller' => 'Specialsituations', 'action' => 'view', $employeeworkinformation->specialsituation->id]) : '' ?></td>
                <td><?= $employeeworkinformation->has('paymenttype') ? $this->Html->link($employeeworkinformation->paymenttype->id, ['controller' => 'Paymenttypes', 'action' => 'view', $employeeworkinformation->paymenttype->id]) : '' ?></td>
                <td><?= $employeeworkinformation->has('occupationalcategory') ? $this->Html->link($employeeworkinformation->occupationalcategory->id, ['controller' => 'Occupationalcategories', 'action' => 'view', $employeeworkinformation->occupationalcategory->id]) : '' ?></td>
                <td><?= $employeeworkinformation->has('doublepayagreement') ? $this->Html->link($employeeworkinformation->doublepayagreement->id, ['controller' => 'Doublepayagreements', 'action' => 'view', $employeeworkinformation->doublepayagreement->id]) : '' ?></td>
                <td><?= $employeeworkinformation->has('payrolltype') ? $this->Html->link($employeeworkinformation->payrolltype->id, ['controller' => 'Payrolltypes', 'action' => 'view', $employeeworkinformation->payrolltype->id]) : '' ?></td>
                <td><?= h($employeeworkinformation->admission_date) ?></td>
                <td><?= $this->Number->format($employeeworkinformation->state) ?></td>
                <td><?= h($employeeworkinformation->liquidation_date) ?></td>
                <td><?= h($employeeworkinformation->liquidation_reason) ?></td>
                <td><?= $this->Number->format($employeeworkinformation->user_created) ?></td>
                <td><?= h($employeeworkinformation->created) ?></td>
                <td><?= $this->Number->format($employeeworkinformation->user_modified) ?></td>
                <td><?= h($employeeworkinformation->modified) ?></td>
                <td><?= $employeeworkinformation->has('proyect') ? $this->Html->link($employeeworkinformation->proyect->name, ['controller' => 'Proyects', 'action' => 'view', $employeeworkinformation->proyect->id]) : '' ?></td>
                <td><?= $employeeworkinformation->has('employeetype') ? $this->Html->link($employeeworkinformation->employeetype->id, ['controller' => 'Employeetypes', 'action' => 'view', $employeeworkinformation->employeetype->id]) : '' ?></td>
                <td><?= $employeeworkinformation->has('position') ? $this->Html->link($employeeworkinformation->position->name, ['controller' => 'Positions', 'action' => 'view', $employeeworkinformation->position->id]) : '' ?></td>
                <td><?= $employeeworkinformation->has('task') ? $this->Html->link($employeeworkinformation->task->name, ['controller' => 'Tasks', 'action' => 'view', $employeeworkinformation->task->id]) : '' ?></td>
                <td><?= $employeeworkinformation->has('area') ? $this->Html->link($employeeworkinformation->area->name, ['controller' => 'Areas', 'action' => 'view', $employeeworkinformation->area->id]) : '' ?></td>
                <td><?= $employeeworkinformation->has('speciality') ? $this->Html->link($employeeworkinformation->speciality->name, ['controller' => 'Specialities', 'action' => 'view', $employeeworkinformation->speciality->id]) : '' ?></td>
                <td><?= $employeeworkinformation->has('employeepersonalinformation') ? $this->Html->link($employeeworkinformation->employeepersonalinformation->name, ['controller' => 'Employeepersonalinformations', 'action' => 'view', $employeeworkinformation->employeepersonalinformation->id]) : '' ?></td>
                <td><?= h($employeeworkinformation->ruc) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employeeworkinformation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employeeworkinformation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employeeworkinformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeworkinformation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
