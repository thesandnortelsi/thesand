<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeepersonalinformation $employeepersonalinformation
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
                <li class="active">
                  <!-- <a href="#tab1hellowWorld" role="tab" data-toggle="tab" aria-expanded="true">Datos personales</a> -->
                  <?= $this->Html->link('Datos personales', ['controller' => 'Employeepersonalinformations', 'action' => 'edit', $employeepersonalinformation->id ], ['class' => 'active']) ?>
                </li>
                <li class="">
                    <?= $this->Html->link('Datos laborales', ['controller' => 'Employeeworkinformations', 'action' => 'add', $employeepersonalinformation->id], ['class' => 'active']) ?>
                </li>
                <!-- <li class="">
                  <a href="#tab1Inspire" role="tab" data-toggle="tab" aria-expanded="false">Datos familiares</a>
                </li>
 -->
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


<!-- Inicio editar datos personales -->

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

        <?= $this->Form->create($employeepersonalinformation) ?>

            <div class="row form-row">
                <div class="col-md-4">
                    <div class="form-group">
                        <?= $this->Form->control('documenttype_id', ['options' => $documenttypes, 'label' => 'Tipo documento', 'class' => 'form-control select2', 'data-init-plugin' => 'select2']); ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <?= $this->Form->control('document', ['label' => 'Nro Documento', 'class' => 'form-control']); ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <?= $this->Form->control('sendingcountry_id', ['options' => $sendingcountries, 'label' => 'Pais emisor', 'class' => 'form-control select2', 'data-init-plugin' => 'select2']); ?>
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
                        <?=  $this->Form->control('nationality_id', ['options' => $nationalities, 'label' => 'Nacionalidad', 'class' => 'form-control select2', 'data-init-plugin' => 'select2']); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">      
                        <?=  $this->Form->control('email', ['label' => 'Correo electrónico', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">      
                        <?=  $this->Form->control('phone', ['label' => 'Teléfono', 'class' => 'form-control']); ?>
                    </div>
                </div>
                
            </div>

            <div class="row form-row">

                <div class="col-md-3">
                    <div class="form-group">      
                        <?=  $this->Form->control('birthdate', ['label' => 'Fecha nacimiento', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">      
                        <?=  $this->Form->control('place_birth', ['label' => 'Lugar nacimiento', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">      
                        <?=  $this->Form->control(
                                        'gender', 
                                        [
                                        'options' => [
                                                    'M'=>'Masculino', 
                                                    'F'=>'Femenino'
                                                    ], 
                                        'label' => 'Sexo', 
                                        'class' => 'form-control select2', 
                                        'data-init-plugin' => 'select2'
                                        ]
                                    ); 
                        ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?=  $this->Form->control(
                                        'state', 
                                        [
                                        'options' => [
                                                    'Soltero'=>'Soltero', 
                                                    'Comprometido'=>'Comprometido',
                                                    'Casado'=>'Casado',
                                                    'Union de hecho'=>'Unión de hecho',
                                                    'Separado'=>'Separado',
                                                    'Divorciado'=>'Divorciado',
                                                    'Viudo'=>'Viudo'
                                                    ], 
                                        'label' => 'Estado civil', 
                                        'class' => 'form-control select2', 
                                        'data-init-plugin' => 'select2'
                                        ]
                                    ); 
                        ?>
                    </div>
                </div>
                
            </div>
            

            <div class="row form-row">
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('departmento', ['options' => $departmentos, 'label' => 'Departamento', 'class' => 'form-control select2', 'data-init-plugin' => 'select2']); ?>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('province_id', ['label' => 'Provincia', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('district_id', ['label' => 'Distrito', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('ubigeo_id', ['options' => $ubigeos, 'label' => 'Localidad', 'class' => 'form-control']); ?>
                    </div>
                </div>
            </div>



            <div class="row form-row">
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('streettype_id', ['options' => $streettypes, 'label' => 'Tipo de vía', 'class' => 'form-control select2', 'data-init-plugin' => 'select2']); ?>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('street_name', ['label' => 'Nombre de vía', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('street_number', ['label' => 'Número de vía', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('department', ['label' => 'Departamento', 'class' => 'form-control']); ?>
                    </div>
                </div>
            </div>


            <div class="row form-row">
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('inside', ['label' => 'Interior', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('mz', ['label' => 'Manzana', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('lot', ['label' => 'Lote', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('kilometer', ['label' => 'Kilometro', 'class' => 'form-control']); ?>
                    </div>
                </div>
            </div>


            <div class="row form-row">
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('block', ['label' => 'Block', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('stage', ['label' => 'Etapa', 'class' => 'form-control']); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('zonetype_id', ['options' => $zonetypes, 'label' => 'Tipo de  zona', 'class' => 'form-control select2', 'data-init-plugin' => 'select2']); ?>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <?= $this->Form->control('zone_name', ['label' => 'Nombre de zona', 'class' => 'form-control']); ?>
                    </div>
                </div>
            </div>


            <div class="row form-row">
                <div class="col-md-12">
                    <div class="form-group">
                        <?= $this->Form->control('reference', ['label' => 'Referencia', 'class' => 'form-control']); ?>
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


<!-- Fin datos personales -->




                  </div>
                </div>
                <div class="tab-pane" id="tab1FollowUs">
                  <div class="row">
                    <div class="col-md-12">
                      <h3>“ Nothing is<span class="semi-bold"> impossible</span>, the word itself says 'I'm <span class="semi-bold">possible</span>'! ”</h3>
                      <p>A style represents visual customizations on top of a layout. By editing a style, you can use Squarespace's visual interface to customize your...</p>
                      <br>
                      <p class="pull-right">
                        <button type="button" class="btn btn-white btn-cons">White</button>
                        <button type="button" class="btn btn-success btn-cons">Success</button>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="tab-pane" id="tab1Inspire">
                  <div class="row">
                    <div class="col-md-12">
                      <h3>Follow us &amp; get updated!</h3>
                      <p>Instantly connect to what's most important to you. Follow your friends, experts, favorite celebrities, and breaking news.</p>
                      <br>
                      <p><a href="#" class="btn-social"><i class="icon-facebook"></i></a> <a href="#" class="btn-social"><i class="icon-twitter"></i> </a> <a href="#" class="btn-social"><i class="icon-dribbble"></i></a> <a href="#" class="btn-social"><i class="icon-pinterest-sign"></i></a> <a href="#" class="btn-social"><i class="icon-tumblr"></i> </a> <a href="#" class="btn-social"><i class="icon-linkedin-sign"></i> </a> </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<!-- End header tabs -->