<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Situation $situation
 */
?>


<ul class="breadcrumb">
    <li>
        <p>Planillas</p>
    </li>
    <li><?= $this->Html->link('Situaciones del trabajador', ['controller' => 'Situations', 'action' => 'index'], ['class' => 'active']) ?></li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Nueva - <span class="semi-bold">Situacion del trabajador</span></h3>
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

        <?= $this->Form->create($situation) ?>

            <div class="row form-row">
                <div class="col-md-4">
                    <div class="form-group">
                        <?= $this->Form->control('code_sunat', ['label' => 'Codigo SUNAT', 'class' => 'form-control']); ?>
                    </div>
                </div>
            </div>

            <div class="row form-row">
                
                <div class="col-md-12">
                    <div class="form-group">      
                        <?=  $this->Form->control('description', ['label' => 'Descripcion', 'class' => 'form-control']); ?>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">                    
                    <?=  $this->Form->control('abbreviated_description', ['label' => 'Descripcion abreviada', 'class' => 'form-control']); ?>
                    </div>
                </div>
                
            </div>

            <div class="form-group">
                <?= $this->Form->button('Guardar', ['class' => 'btn btn-success btn-cons']) ?>
                <?= $this->Html->link('Cancelar', ['controller' => 'Situations', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?>
            </div>
        <?= $this->Form->end() ?>
        </div>
      </div>
    </div>

</div>