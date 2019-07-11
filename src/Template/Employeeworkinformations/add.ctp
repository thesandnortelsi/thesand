<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeeworkinformation $employeeworkinformation
 */
?>


<ul class="breadcrumb">
    <li>
        <p>Planillas</p>
    </li>
    <li><?= $this->Html->link('Trabajadores - Informacion personal', ['controller' => 'Employeepersonalinformations', 'action' => 'index'], ['class' => 'active']) ?></li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Ver - <span class="semi-bold">Trabajador - Informacion personal</span></h3>
</div>


<!-- Star header tabs -->

<div class="col-md-12">
              <ul class="nav nav-tabs" role="tablist">
                <li class="">
                  <!-- <a href="#tab1hellowWorld" role="tab" data-toggle="tab" aria-expanded="true">Datos personales</a> -->
                  <?= $this->Html->link('Datos personales', ['controller' => 'Employeepersonalinformations', 'action' => 'edit', $idemployeepersonalinformation  ], ['class' => '']) ?>

                  <!-- 
                    $employeepersonalinformation->id
                   -->

                </li>
                <li class="active">
                    <?= $this->Html->link('Datos laborales', ['controller' => 'Employeeworkinformations', 'action' => 'add', $idemployeepersonalinformation], ['class' => 'active']) ?>
                </li>
                <!-- <li class="">
                  <a href="#tab1Inspire" role="tab" data-toggle="tab" aria-expanded="false">Datos familiares</a>
                </li> -->
                
              </ul>
              <div class="tools">
                <a href="javascript:;" class="collapse"></a>
                <a href="#grid-config" data-toggle="modal" class="config"></a>
                <a href="javascript:;" class="reload"></a>
                <a href="javascript:;" class="remove"></a>
              </div>
              <div class="tab-content">
                <div class="tab-pane active" id="tab1hellowWorld">
                  <div class="row column-seperation">
                    
                
                    <!-- Inicio Datos Personales/ -->

                    <div class="row">
                        <div class="col-md-12">
                          <div class="grid simple form-grid">
                            <div class="grid-title no-border">
                                <div class="tools">
                                    <a href="javascript:;" class="collapse"></a>
                                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                                    <a href="javascript:;" class="reload"></a>
                                    <a href="javascript:;" class="remove"></a>
                                </div>
                            </div>


                            <div class="grid-body no-border">

                            <?= $this->Form->create($employeeworkinformation) ?>

                                
                                <div class="row form-row">

                                    <div class="col-md-12">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('employeepersonalinformation_id', ['options' => $employeepersonalinformations, 'label' => 'Trabajador', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>

                                </div>


                                <div class="row form-row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <?= $this->Form->control('proyect_id', ['options' => $proyects, 'label' => 'Proyecto', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    
                                </div>

                                
                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">  
                                            <?=  $this->Form->control('laborregime_id', ['options' => $laborregimes, 'label' => 'Regimen Laboral', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('educationalsituation_id', ['options' => $educationalsituations, 'label' => 'Situación Educativa', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('activity_id', ['options' => $activities, 'label' => 'Ocupación', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('disability', ['options'=>['0'=>'No', '1'=>'Si'], 'label' => 'Discapacidad', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('cuspp', ['label' => 'CUSPP', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('sctr_pension', ['options'=>['0'=>'Ninguno', '1'=>'ONP', '2'=>'Cía privada'],  'label' => 'SCTR Pensión', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    
                                </div>


                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('contracttype_id', ['options' => $contracttypes, 'label' => 'Tipo de contrato', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('alternative_regime', ['options'=>['0'=>'No', '1'=>'Si'],  'label' => 'Sujeto a régimen alternativo, acumulativo', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('maximum_day', ['options'=>['0'=>'No', '1'=>'Si'],  'label' => 'Sujeto a jornada de trabajo máxima', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    
                                </div>


                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('night_time', ['options'=>['0'=>'No', '1'=>'Si'], 'label' => 'Sujeto a horario nocturno', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('is_unionized', ['options'=>['0'=>'No', '1'=>'Si'],  'label' => 'Es sindicalizado', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('periodicityremuneration_id', ['options' => $periodicityremunerations,  'label' => 'Periodicidad de la remuneración', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    
                                </div>


                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('basic_remuneration_728', ['label' => 'Monto  remuneración básica D.Leg. 728', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('income_exonerated_5ta', ['options'=>['0'=>'No', '1'=>'Si'],'label' => 'Rentas de 5ta categoría exoneradas', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('situation_id', ['options' => $situations,  'label' => 'Situación', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    
                                </div>


                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('specialsituation_id', ['options' => $specialsituations, 'label' => 'Situación especial', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('paymenttype_id', ['options' => $paymenttypes,  'label' => 'Tipo de pago', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('occupationalcategory_id', ['options' => $occupationalcategories,'label' => 'Categoría ocupacional', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    
                                </div>


                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('doublepayagreement_id', ['options' => $doublepayagreements, 'label' => 'Convenio para evitar la doble tributación', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('payrolltype_id', ['options' => $payrolltypes,  'label' => 'Tipo de planilla', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('admission_date', ['label' => 'Fecha de ingreso', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('employeetype_id', ['options' => $employeetypes, 'label' => 'Tipo de empleado', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('position_id', ['options' => $positions,  'label' => 'Categoría/Cargo', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('task_id', ['options' => $tasks, 'label' => 'Ocupacion', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    
                                </div>



                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('area_id', ['options' => $areas, 'label' => 'Area', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('speciality_id', ['options' => $specialities,  'label' => 'Especialidad', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                    
                                    
                                </div>



                                <div class="row form-row">
                                    <div class="col-md-4">
                                        <div class="form-group">      
                                            <?=  $this->Form->control('ruc', ['label' => 'RUC', 'class' => 'form-control']); ?>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <?= $this->Form->button('Guardar', ['class' => 'btn btn-success btn-cons']) ?>
                                    <!-- <?= $this->Html->link('Cancelar', ['controller' => 'Employeeworkinformations', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?> -->
                                    <?= $this->Html->link('Cancelar', ['controller' => 'Employeepersonalinformations', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?>
                                </div>

                            <?= $this->Form->end() ?>
                            </div>
                          </div>
                        </div>

                    </div>


                    <!-- /Fin Datos Personales -->




                  </div>
                </div>
                <div class="tab-pane" id="tab1FollowUs">
                  <div class="row">
                    <div class="col-md-12">
                      



                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab1Inspire">
                  <div class="row">
                    <div class="col-md-12">
                      



                    </div>
                  </div>
                </div>
              </div>
            </div>

<!-- End header tabs -->
