<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeeworkinformation $employeeworkinformation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employeeworkinformations'), ['action' => 'index']) ?></li>
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
<div class="employeeworkinformations form large-9 medium-8 columns content">
    <?= $this->Form->create($employeeworkinformation) ?>
    <fieldset>
        <legend><?= __('Add Employeeworkinformation') ?></legend>
        <?php
            echo $this->Form->control('laborregime_id', ['options' => $laborregimes]);
            echo $this->Form->control('educationalsituation_id', ['options' => $educationalsituations]);
            echo $this->Form->control('activity_id', ['options' => $activities]);
            echo $this->Form->control('disability');
            echo $this->Form->control('cuspp');
            echo $this->Form->control('sctr_pension');
            echo $this->Form->control('contracttype_id', ['options' => $contracttypes]);
            echo $this->Form->control('alternative_regime');
            echo $this->Form->control('maximum_day');
            echo $this->Form->control('night_time');
            echo $this->Form->control('is_unionized');
            echo $this->Form->control('periodicityremuneration_id', ['options' => $periodicityremunerations]);
            echo $this->Form->control('basic_remuneration_728');
            echo $this->Form->control('situation_id', ['options' => $situations]);
            echo $this->Form->control('income_exonerated_5ta');
            echo $this->Form->control('specialsituation_id', ['options' => $specialsituations]);
            echo $this->Form->control('paymenttype_id', ['options' => $paymenttypes]);
            echo $this->Form->control('occupationalcategory_id', ['options' => $occupationalcategories]);
            echo $this->Form->control('doublepayagreement_id', ['options' => $doublepayagreements]);
            echo $this->Form->control('payrolltype_id', ['options' => $payrolltypes]);
            echo $this->Form->control('admission_date', ['empty' => true]);
            echo $this->Form->control('state');
            echo $this->Form->control('liquidation_date', ['empty' => true]);
            echo $this->Form->control('liquidation_reason');
            echo $this->Form->control('user_created');
            echo $this->Form->control('user_modified');
            echo $this->Form->control('proyect_id', ['options' => $proyects]);
            echo $this->Form->control('employeetype_id', ['options' => $employeetypes]);
            echo $this->Form->control('position_id', ['options' => $positions]);
            echo $this->Form->control('task_id', ['options' => $tasks]);
            echo $this->Form->control('area_id', ['options' => $areas]);
            echo $this->Form->control('speciality_id', ['options' => $specialities]);
            echo $this->Form->control('employeepersonalinformation_id', ['options' => $employeepersonalinformations]);
            echo $this->Form->control('ruc');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
