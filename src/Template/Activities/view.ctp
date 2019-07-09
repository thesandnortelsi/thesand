<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Activity $activity
 */
?>

<ul class="breadcrumb">
    <li>
        <p>Planillas</p>
    </li>
    <li><?= $this->Html->link('Actividades', ['controller' => 'Activities', 'action' => 'index'], ['class' => 'active']) ?></li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Ver - <span class="semi-bold">Actividad</span></h3>
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

        <?= $this->Form->create($activity) ?>

            <div class="row form-row">
                <div class="col-md-4">
                    <div class="form-group">
                        <?= $this->Form->control('code_sunat', ['label' => 'Codigo SUNAT', 'class' => 'form-control', 'disabled' => 'true']); ?>
                    </div>
                </div>
            </div>

            <div class="row form-row">
                
                <div class="col-md-12">
                    <div class="form-group">      
                        <?=  $this->Form->control('description', ['label' => 'Descripcion', 'class' => 'form-control', 'disabled' => 'true']); ?>
                    </div>
                </div>
                
            </div>

            <div class="form-group pull-right">
                <?= $this->Html->link('Regresar', ['controller' => 'Activities', 'action' => 'index'], ['class' => 'btn btn-info btn-cons']) ?>
            </div>
        <?= $this->Form->end() ?>
        </div>
      </div>
    </div>

</div>