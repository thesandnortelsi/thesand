<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employee $employee
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?></li>
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
        <li><?= $this->Html->link(__('List Persons'), ['controller' => 'Persons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Person'), ['controller' => 'Persons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Proyects'), ['controller' => 'Proyects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Proyect'), ['controller' => 'Proyects', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Employeetypes'), ['controller' => 'Employeetypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Employeetype'), ['controller' => 'Employeetypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Dataafps'), ['controller' => 'Dataafps', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Dataafp'), ['controller' => 'Dataafps', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Databanks'), ['controller' => 'Databanks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Databank'), ['controller' => 'Databanks', 'action' => 'add']) ?></li>
    </ul>
</nav> -->


<ul class="breadcrumb">
    <li>
        <p>Planillas</p>
    </li>
    <li><?= $this->Html->link('Empleados', ['controller' => 'Employees', 'action' => 'index'], ['class' => 'active']) ?></li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Nuevo - <span class="semi-bold">Empleado</span></h3>
</div>



<div class="row">
<div class="col-md-12">
  <div class="grid simple form-grid">
    <div class="grid-title no-border">
      <!-- <h4>Traditional <span class="semi-bold">Validation</span></h4> -->
      <div class="tools">
        <a href="javascript:;" class="collapse"></a>
        <a href="#grid-config" data-toggle="modal" class="config"></a>
        <a href="javascript:;" class="reload"></a>
        <a href="javascript:;" class="remove"></a>
      </div>
    </div>
    <div class="grid-body no-border">
      <!-- <form action="#" id="form_traditional_validation" name="form_traditional_validation" role="form" autocomplete="off" class="validate"> -->

    <?= $this->Form->create($employee) ?>

        <div class="form-group">
          <?= $this->Form->control('proyect_id', ['options' => $proyects, 'label' => 'Proyecto', 'class' => 'form-control select2', 'data-init-plugin' => 'select2']); ?>
        </div>

        <div class="form-group">
          <?= $this->Form->control('area_id', ['options' => $areas, 'label' => 'Area', 'class' => 'form-control select2', 'data-init-plugin' => 'select2']); ?>
        </div>

        <div class="row form-row">
            <div class="col-md-6">
                <?=  $this->Form->control('person_id', ['options' => $persons, 'label' => 'Persona', 'class' => 'form-control select2', 'data-init-plugin' => 'select2' ]); ?>
            </div>
            
            <div class="col-md-6">
                <?=  $this->Form->control('payrolltype_id', ['options' => $payrolltypes, 'label' => '
                Planilla', 'class' => 'form-control']); ?>
            </div>
        </div>

        <div class="row form-row">
            <div class="col-md-4">
                 <?= $this->Form->control('admission_date', [ 'label' =>'Fecha ingreso', 'class' => 'form-control', 'required'=>'required']); ?>
            </div>
            
            <div class="col-md-4">
                <?=  $this->Form->control('occupationalcategory_id', ['options' => $occupationalcategories, 'label' => '
                Categoria', 'class' => 'form-control select2', 'data-init-plugin' => 'select2'  ]); ?>
            </div>

            <div class="col-md-4">
                <?=  $this->Form->control('employeetype_id', ['options' => $employeetypes, 'label' => '
                Tipo', 'class' => 'form-control select2', 'data-init-plugin' => 'select2'  ]); ?>
            </div>
            
        </div>


        <div class="row form-row">
            <div class="col-md-4">
                <div class="form-group">
                    <?= $this->Form->control('position_id', ['options' => $positions, 'label' => '
                Categoria/Cargo', 'class' => 'form-control']); ?>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">      
                <?=  $this->Form->control('task_id', ['options' => $tasks, 'label' => '
                Ocupacion', 'class' => 'form-control select2', 'data-init-plugin' => 'select2'  ]); ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">                    
                <?=  $this->Form->control('speciality_id', ['options' => $specialities, 'label' => '
                Especialidad', 'class' => 'form-control select2', 'data-init-plugin' => 'select2'  ]); ?>
                </div>
            </div>
            
        </div>


        <div class="row form-row">
            <div class="col-md-4">
                <div class="form-group">                    
                <?=  $this->Form->control('contracttype_id', ['options' => $contracttypes, 'label' => '
                Tipo contrato', 'class' => 'form-control select2', 'data-init-plugin' => 'select2'  ]); ?>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">                    
                <?=  $this->Form->control('laborregime_id', ['options' => $laborregimes, 'label' => '
                Regimen laboral', 'class' => 'form-control select2', 'data-init-plugin' => 'select2'  ]); ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">    
                <?=  $this->Form->control('paymenttype_id', ['options' => $paymenttypes, 'label' => '
                Tipo de pago', 'class' => 'form-control select2', 'data-init-plugin' => 'select2'  ]); ?>
                </div>
            </div>
            
        </div>


        <div class="row form-row">

            <div class="col-md-4">
                <div class="form-group">        
                <?=  $this->Form->control('doublepayagreement_id', ['options' => $doublepayagreements, 'label' => '
                Doble remuneracion', 'class' => 'form-control select2', 'data-init-plugin' => 'select2'  ]); ?>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">                    
                <?=  $this->Form->control('periodicityremuneration_id', ['options' => $periodicityremunerations, 'label' => '
                Periodicidad remuneracion', 'class' => 'form-control select2', 'data-init-plugin' => 'select2'  ]); ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">  
                <?= $this->Form->control('basic_remuneration_728', [ 'label' =>'Remuneracion 728', 'class' => 'form-control', 'required'=>'required']); ?>
                </div>
            </div>
            
        </div>


        <div class="row form-row">
            <div class="col-md-4">
                <div class="form-group">        
                <?=  $this->Form->control('educationalsituation_id', ['options' => $educationalsituations, 'label' => 'Situacion educativa', 'class' => 'form-control select2', 'data-init-plugin' => 'select2'  ]); ?>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">                    
                <?=  $this->Form->control('activity_id', ['options' => $activities, 'label' => 'Actividades', 'class' => 'form-control select2', 'data-init-plugin' => 'select2'  ]); ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">  
                    <?=  $this->Form->control('situation_id', ['options' => $situations, 'label' => 'Situaciones', 'class' => 'form-control select2', 'data-init-plugin' => 'select2'  ]); ?>
                </div>
            </div>
            
        </div>

        <div class="row form-row">
            <div class="col-md-4">
                <div class="form-group">        
                <?=  $this->Form->control('specialsituation_id', ['options' => $specialsituations, 'label' => 'Situaciones especiales', 'class' => 'form-control select2', 'data-init-plugin' => 'select2'  ]); ?>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">                    
                <?=  $this->Form->control('income_exonerated_5ta', ['label' => 'Exoneracion 5ta categoria', 'class' => 'form-control', 'options' => ['1' => 'Si', '0' => 'No'] ]); ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">  
                    <?=  $this->Form->control('alternative_regime', ['label' => 'Regimen alternativo', 'class' => 'form-control'  ]); ?>
                </div>
            </div>
            
        </div>


        <div class="row form-row">
            <div class="col-md-4">
                <div class="form-group">        
                <?=  $this->Form->control('disability', ['label' => 'Discapacidad', 'class' => 'form-control', 'options' => ['1' => 'Si', '0' => 'No'] ] ); ?>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">                    
                <?=  $this->Form->control('cuspp', ['label' => 'CUSPP', 'class' => 'form-control']); ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">  
                    <?=  $this->Form->control('sctr_pension', ['label' => 'SCTR Pensión', 'class' => 'form-control', 'optons' => ['0'=>  'Ninguno', '1' => 'ONP', '2'=> 'Cía privada'] ]); ?>
                </div>
            </div>
            
        </div>


        <div class="row form-row">
            <div class="col-md-4">
                <div class="form-group">        
                <?=  $this->Form->control('night_time', ['label' => 'Sujeto a horario nocturno', 'class' => 'form-control', 'options' => ['1' => 'Si', '0' => 'No'] ] ); ?>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">                    
                <?=  $this->Form->control('is_unionized', ['label' => 'Es sindicalizado', 'class' => 'form-control', 'options' => ['1' => 'Si', '0' => 'No'] ] ); ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">  
                    <!-- <?=  $this->Form->control('sctr_pension', ['label' => 'SCTR Pensión', 'class' => 'form-control', 'optons' => ['0'=>  'Ninguno', '1' => 'ONP', '2'=> 'Cía privada'] ]); ?> -->
                </div>
            </div>
            
        </div>


        <!-- <div class="row form-row">
            <div class="col-md-4">
                <div class="form-group">        
                <?=  $this->Form->control('state', ['label' => 'Estado', 'class' => 'form-control', 'options' => ['1' => 'Activo', '0' => 'Baja']]); ?>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="form-group">                    
                <?=  $this->Form->control('liquidation_date', ['label' => 'Fecha de liquidación', 'class' => 'form-control']); ?>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">  
                    <?=  $this->Form->control('liquidation_reason', ['label' => 'Motivo cese', 'class' => 'form-control'  ]); ?>
                </div>
            </div>
            
        </div> -->


        <!-- <div class="form-group"> -->
          <!-- <label class="form-label">Card Holder's Name</label> <span class="help">e.g. "Jane Smith"</span> -->
          <!-- <div class="input-with-icon right"> -->
            <!-- <i class=""></i> -->
            <!-- <input class="form-control" id="form1CardHolderName" name="form1CardHolderName" type="text" required> -->
            <!-- <?= $this->Form->control('description', [ 'label' =>'Descripción', 'class' => 'form-control']); ?> -->
          <!-- </div>
        </div>
        <div class="form-group"> -->
          <!-- <label class="form-label">Card Number</label>z <span class="help">e.g. "5689569985"</span> -->
          <!-- <div class="input-with-icon right"> -->
            <!-- <input class="form-control" id="form1CardNumber" name="form1CardNumber" type="text" type=text pattern="[0-9]{13,16}" required> -->
            <!-- <?= $this->Form->control('state', [ 'label' => 'Estado', 'class' => 'form-control select2', 'data-init-plugin' => 'select2', 'options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO']]); ?>
          </div> -->
        <!-- </div>
        <div class="form-actions">
          <div class="pull-right"> -->
            <!-- <button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i> Save</button>
            <button class="btn btn-white btn-cons" type="button">Cancel</button> -->

            <?= $this->Form->button('Guardar', ['class' => 'btn btn-success btn-cons']) ?>
            <?= $this->Html->link('Cancelar', ['controller' => 'Employees', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?>

          </div>
        </div>
      <?= $this->Form->end() ?>
    </div>
  </div>
</div>

</div>

