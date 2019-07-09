<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Position $position
 */
?>
<ul class="breadcrumb">
    <li>
        <p>Planillas</p>
    </li>
    <li><?= $this->Html->link('Cargos/Categorias', ['controller' => 'Positions', 'action' => 'index'], ['class' => 'active']) ?></li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Nuevo - <span class="semi-bold">Cargo/Categoria</span></h3>
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

    <?= $this->Form->create($position) ?>

        <div class="form-group">
          <?= $this->Form->control('name', [ 'label' =>'Descripción', 'class' => 'form-control', 'required'=>'required']); ?>
        </div>
            <?= $this->Form->button('Guardar', ['class' => 'btn btn-success btn-cons']) ?>
            <?= $this->Html->link('Cancelar', ['controller' => 'Positions', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?>

          </div>
        </div>
      <?= $this->Form->end() ?>
    </div>
  </div>
</div>

</div>

