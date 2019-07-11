<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeedataaditional $employeedataaditional
 */
?>

<ul class="breadcrumb">
    <li>
        <p>Planillas</p>
    </li>
    <li><?= $this->Html->link('Informacion personal', ['controller' => 'Employeepersonalinformations', 'action' => 'index'], ['class' => 'active']) ?></li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Nuevo - <span class="semi-bold">Informacion personal</span></h3>
</div>

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

        <?= $this->Form->create($employeedataaditional) ?>

            <div class="row form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <?= $this->Form->control('employeeworkinformation_id', ['options' => $employeeworkinformations, 'label' => 'Trabajador', 'class' => 'form-control']); ?>
                    </div>
                </div>
            </div>

            <div class="row form-row">
                <div class="col-md-4">
                    <div class="form-group">
                        <?= $this->Form->control('documenttype_id', ['options' => $documenttypes, 'label' => 'Tipo documento', 'class' => 'form-control']); ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <?= $this->Form->control('documentnumber', ['label' => 'Nro Documento', 'class' => 'form-control']); ?>
                    </div>
                </div>
            </div>

            <div class="row form-row">
                <div class="col-md-4">
                    <div class="form-group">      
                        <?=  $this->Form->control('surname_father', ['label' => 'Apellido paterno', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">      
                        <?=  $this->Form->control('surname_mother', ['label' => 'Apellido materno', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">      
                        <?=  $this->Form->control('name', ['label' => 'Nombres', 'class' => 'form-control']); ?>
                    </div>
                </div>
                
            </div>

            <div class="row form-row">
                <div class="col-md-4">
                    <div class="form-group">      
                        <?=  $this->Form->control('gender', ['options'=>['M'=>'Masculino', 'F'=>'Femenino'], 'label' => 'Sexo', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">      
                        <?=  $this->Form->control('relationship', ['options'=>['HIJO'=>'HIJO', 'CONYUGUE'=>'CONYUGUE', 'PADRE'=>'PADRE', 'OTRO'=>'OTRO'], 'label' => 'Relacion', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">      
                        <?=  $this->Form->control('family_burden', ['options'=>['1'=>'SI', '0'=>'NO'], 'label' => 'Carga  familiar', 'class' => 'form-control']); ?>
                    </div>
                </div>
                
            </div>
            

            <div class="row form-row">
                <div class="col-md-4">
                    <div class="form-group">      
                        <?=  $this->Form->control('children_school_age', ['options'=>['1'=>'SI', '0'=>'NO'], 'label' => 'Hijo en edad escolar', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">      
                        <?=  $this->Form->control('status', ['options'=>['1'=>'ACTIVO', '0'=>'INACTIVO'], 'label' => 'Estado', 'class' => 'form-control']); ?>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <?= $this->Form->button('Guardar', ['class' => 'btn btn-success btn-cons']) ?>
                <?= $this->Html->link('Cancelar', ['controller' => 'Employeepersonalinformations', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?>
            </div>
        <?= $this->Form->end() ?>
        </div>
      </div>
    </div>

</div>