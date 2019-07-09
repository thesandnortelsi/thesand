<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Laborregime $laborregime
 */
?>


<ul class="breadcrumb">
    <li>
        <p>Planillas</p>
    </li>
    <li><?= $this->Html->link('Regimenes Pensionarios', ['controller' => 'Laborregimes', 'action' => 'index'], ['class' => 'active']) ?></li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Editar - <span class="semi-bold">Regimen pensionario</span></h3>
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

        <?= $this->Form->create($laborregime) ?>

            <div class="row form-row">
                <div class="col-md-4">
                    <div class="form-group">
                        <?= $this->Form->control('code_sunat', ['label' => 'Codigo SUNAT', 'class' => 'form-control']); ?>
                    </div>
                </div>
            </div>

            <div class="row form-row">
                
                <div class="col-md-6">
                    <div class="form-group">      
                        <?=  $this->Form->control('description', ['label' => 'Descripcion', 'class' => 'form-control']); ?>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">                    
                    <?=  $this->Form->control('abbreviated_description', ['label' => 'Descripcion abreviada', 'class' => 'form-control']); ?>
                    </div>
                </div>
                
            </div>



            <div class="row form-row">
                <div class="col-md-4">
                    <div class="form-group">
                        <?= $this->Form->control('private_sector', ['label' => 'Sector privado', 'class' => 'form-control']); ?>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="form-group">      
                        <?=  $this->Form->control('public_sector', ['label' => 'Sector publico', 'class' => 'form-control']); ?>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">                    
                    <?=  $this->Form->control('other_entities', ['label' => 'Otras entidades', 'class' => 'form-control']); ?>
                    </div>
                </div>
                
            </div>

            <div class="form-group">
                <?= $this->Form->button('Guardar', ['class' => 'btn btn-success btn-cons']) ?>
                <?= $this->Html->link('Cancelar', ['controller' => 'Laborregimes', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?>
            </div>
        <?= $this->Form->end() ?>
        </div>
      </div>
    </div>

</div>