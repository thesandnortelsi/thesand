<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeeworkinformation $employeeworkinformation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employeeworkinformation'), ['action' => 'edit', $employeeworkinformation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employeeworkinformation'), ['action' => 'delete', $employeeworkinformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeeworkinformation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Employeeworkinformations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employeeworkinformation'), ['action' => 'add']) ?> </li>
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
        <li><?= $this->Html->link(__('List Proyects'), ['controller' => 'Proyects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Proyect'), ['controller' => 'Proyects', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employeetypes'), ['controller' => 'Employeetypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employeetype'), ['controller' => 'Employeetypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Positions'), ['controller' => 'Positions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Position'), ['controller' => 'Positions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tasks'), ['controller' => 'Tasks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Tasks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Areas'), ['controller' => 'Areas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['controller' => 'Areas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Specialities'), ['controller' => 'Specialities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Speciality'), ['controller' => 'Specialities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Employeepersonalinformations'), ['controller' => 'Employeepersonalinformations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employeepersonalinformation'), ['controller' => 'Employeepersonalinformations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dataafps'), ['controller' => 'Dataafps', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dataafp'), ['controller' => 'Dataafps', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Databanks'), ['controller' => 'Databanks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Databank'), ['controller' => 'Databanks', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payrolldetails'), ['controller' => 'Payrolldetails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payrolldetail'), ['controller' => 'Payrolldetails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Residencecontrols'), ['controller' => 'Residencecontrols', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Residencecontrol'), ['controller' => 'Residencecontrols', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employeeworkinformations view large-9 medium-8 columns content">
    <h3><?= h($employeeworkinformation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Laborregime') ?></th>
            <td><?= $employeeworkinformation->has('laborregime') ? $this->Html->link($employeeworkinformation->laborregime->id, ['controller' => 'Laborregimes', 'action' => 'view', $employeeworkinformation->laborregime->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Educationalsituation') ?></th>
            <td><?= $employeeworkinformation->has('educationalsituation') ? $this->Html->link($employeeworkinformation->educationalsituation->id, ['controller' => 'Educationalsituations', 'action' => 'view', $employeeworkinformation->educationalsituation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activity') ?></th>
            <td><?= $employeeworkinformation->has('activity') ? $this->Html->link($employeeworkinformation->activity->id, ['controller' => 'Activities', 'action' => 'view', $employeeworkinformation->activity->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cuspp') ?></th>
            <td><?= h($employeeworkinformation->cuspp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contracttype') ?></th>
            <td><?= $employeeworkinformation->has('contracttype') ? $this->Html->link($employeeworkinformation->contracttype->id, ['controller' => 'Contracttypes', 'action' => 'view', $employeeworkinformation->contracttype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Periodicityremuneration') ?></th>
            <td><?= $employeeworkinformation->has('periodicityremuneration') ? $this->Html->link($employeeworkinformation->periodicityremuneration->id, ['controller' => 'Periodicityremunerations', 'action' => 'view', $employeeworkinformation->periodicityremuneration->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Situation') ?></th>
            <td><?= $employeeworkinformation->has('situation') ? $this->Html->link($employeeworkinformation->situation->id, ['controller' => 'Situations', 'action' => 'view', $employeeworkinformation->situation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Specialsituation') ?></th>
            <td><?= $employeeworkinformation->has('specialsituation') ? $this->Html->link($employeeworkinformation->specialsituation->id, ['controller' => 'Specialsituations', 'action' => 'view', $employeeworkinformation->specialsituation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paymenttype') ?></th>
            <td><?= $employeeworkinformation->has('paymenttype') ? $this->Html->link($employeeworkinformation->paymenttype->id, ['controller' => 'Paymenttypes', 'action' => 'view', $employeeworkinformation->paymenttype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Occupationalcategory') ?></th>
            <td><?= $employeeworkinformation->has('occupationalcategory') ? $this->Html->link($employeeworkinformation->occupationalcategory->id, ['controller' => 'Occupationalcategories', 'action' => 'view', $employeeworkinformation->occupationalcategory->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Doublepayagreement') ?></th>
            <td><?= $employeeworkinformation->has('doublepayagreement') ? $this->Html->link($employeeworkinformation->doublepayagreement->id, ['controller' => 'Doublepayagreements', 'action' => 'view', $employeeworkinformation->doublepayagreement->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payrolltype') ?></th>
            <td><?= $employeeworkinformation->has('payrolltype') ? $this->Html->link($employeeworkinformation->payrolltype->id, ['controller' => 'Payrolltypes', 'action' => 'view', $employeeworkinformation->payrolltype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Liquidation Reason') ?></th>
            <td><?= h($employeeworkinformation->liquidation_reason) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proyect') ?></th>
            <td><?= $employeeworkinformation->has('proyect') ? $this->Html->link($employeeworkinformation->proyect->name, ['controller' => 'Proyects', 'action' => 'view', $employeeworkinformation->proyect->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employeetype') ?></th>
            <td><?= $employeeworkinformation->has('employeetype') ? $this->Html->link($employeeworkinformation->employeetype->id, ['controller' => 'Employeetypes', 'action' => 'view', $employeeworkinformation->employeetype->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $employeeworkinformation->has('position') ? $this->Html->link($employeeworkinformation->position->name, ['controller' => 'Positions', 'action' => 'view', $employeeworkinformation->position->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Task') ?></th>
            <td><?= $employeeworkinformation->has('task') ? $this->Html->link($employeeworkinformation->task->name, ['controller' => 'Tasks', 'action' => 'view', $employeeworkinformation->task->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Area') ?></th>
            <td><?= $employeeworkinformation->has('area') ? $this->Html->link($employeeworkinformation->area->name, ['controller' => 'Areas', 'action' => 'view', $employeeworkinformation->area->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Speciality') ?></th>
            <td><?= $employeeworkinformation->has('speciality') ? $this->Html->link($employeeworkinformation->speciality->name, ['controller' => 'Specialities', 'action' => 'view', $employeeworkinformation->speciality->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Employeepersonalinformation') ?></th>
            <td><?= $employeeworkinformation->has('employeepersonalinformation') ? $this->Html->link($employeeworkinformation->employeepersonalinformation->name, ['controller' => 'Employeepersonalinformations', 'action' => 'view', $employeeworkinformation->employeepersonalinformation->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ruc') ?></th>
            <td><?= h($employeeworkinformation->ruc) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($employeeworkinformation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disability') ?></th>
            <td><?= $this->Number->format($employeeworkinformation->disability) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sctr Pension') ?></th>
            <td><?= $this->Number->format($employeeworkinformation->sctr_pension) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alternative Regime') ?></th>
            <td><?= $this->Number->format($employeeworkinformation->alternative_regime) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Maximum Day') ?></th>
            <td><?= $this->Number->format($employeeworkinformation->maximum_day) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Night Time') ?></th>
            <td><?= $this->Number->format($employeeworkinformation->night_time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Is Unionized') ?></th>
            <td><?= $this->Number->format($employeeworkinformation->is_unionized) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Basic Remuneration 728') ?></th>
            <td><?= $this->Number->format($employeeworkinformation->basic_remuneration_728) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Income Exonerated 5ta') ?></th>
            <td><?= $this->Number->format($employeeworkinformation->income_exonerated_5ta) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $this->Number->format($employeeworkinformation->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Created') ?></th>
            <td><?= $this->Number->format($employeeworkinformation->user_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Modified') ?></th>
            <td><?= $this->Number->format($employeeworkinformation->user_modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Admission Date') ?></th>
            <td><?= h($employeeworkinformation->admission_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Liquidation Date') ?></th>
            <td><?= h($employeeworkinformation->liquidation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($employeeworkinformation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($employeeworkinformation->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Dataafps') ?></h4>
        <?php if (!empty($employeeworkinformation->dataafps)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Cuspp') ?></th>
                <th scope="col"><?= __('Employeeworkinformation Id') ?></th>
                <th scope="col"><?= __('Afp Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('User Created') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('User Modified') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employeeworkinformation->dataafps as $dataafps): ?>
            <tr>
                <td><?= h($dataafps->id) ?></td>
                <td><?= h($dataafps->cuspp) ?></td>
                <td><?= h($dataafps->employeeworkinformation_id) ?></td>
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
        <?php if (!empty($employeeworkinformation->databanks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number Account') ?></th>
                <th scope="col"><?= __('Cci') ?></th>
                <th scope="col"><?= __('Employeeworkinformation Id') ?></th>
                <th scope="col"><?= __('Bank Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('User Created') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('User Modified') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employeeworkinformation->databanks as $databanks): ?>
            <tr>
                <td><?= h($databanks->id) ?></td>
                <td><?= h($databanks->number_account) ?></td>
                <td><?= h($databanks->cci) ?></td>
                <td><?= h($databanks->employeeworkinformation_id) ?></td>
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
    <div class="related">
        <h4><?= __('Related Payrolldetails') ?></h4>
        <?php if (!empty($employeeworkinformation->payrolldetails)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Total') ?></th>
                <th scope="col"><?= __('Subtotal') ?></th>
                <th scope="col"><?= __('Payrolls Id') ?></th>
                <th scope="col"><?= __('Employeeworkinformation Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employeeworkinformation->payrolldetails as $payrolldetails): ?>
            <tr>
                <td><?= h($payrolldetails->id) ?></td>
                <td><?= h($payrolldetails->total) ?></td>
                <td><?= h($payrolldetails->subtotal) ?></td>
                <td><?= h($payrolldetails->payrolls_id) ?></td>
                <td><?= h($payrolldetails->employeeworkinformation_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Payrolldetails', 'action' => 'view', $payrolldetails->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Payrolldetails', 'action' => 'edit', $payrolldetails->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payrolldetails', 'action' => 'delete', $payrolldetails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payrolldetails->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Residencecontrols') ?></h4>
        <?php if (!empty($employeeworkinformation->residencecontrols)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Presentation Letter') ?></th>
                <th scope="col"><?= __('Social Interaction Ring') ?></th>
                <th scope="col"><?= __('Origin') ?></th>
                <th scope="col"><?= __('User Created') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('User Modified') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Employeeworkinformation Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($employeeworkinformation->residencecontrols as $residencecontrols): ?>
            <tr>
                <td><?= h($residencecontrols->id) ?></td>
                <td><?= h($residencecontrols->presentation_letter) ?></td>
                <td><?= h($residencecontrols->social_interaction_ring) ?></td>
                <td><?= h($residencecontrols->origin) ?></td>
                <td><?= h($residencecontrols->user_created) ?></td>
                <td><?= h($residencecontrols->created) ?></td>
                <td><?= h($residencecontrols->user_modified) ?></td>
                <td><?= h($residencecontrols->modified) ?></td>
                <td><?= h($residencecontrols->employeeworkinformation_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Residencecontrols', 'action' => 'view', $residencecontrols->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Residencecontrols', 'action' => 'edit', $residencecontrols->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Residencecontrols', 'action' => 'delete', $residencecontrols->id], ['confirm' => __('Are you sure you want to delete # {0}?', $residencecontrols->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
