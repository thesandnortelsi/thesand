<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bank $bank
 */
?>
<ul class="breadcrumb">
    <li>
        <p>Planillas</p>
    </li>
    <li><?= $this->Html->link('Bancos', ['controller' => 'Banks', 'action' => 'index'], ['class' => 'active']) ?></li>
</ul>
<div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Nuevo - <span class="semi-bold">Banco</span></h3>
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

    <?= $this->Form->create($bank) ?>

        <div class="form-group">
          <?= $this->Form->control('description', [ 'label' =>'Descripción', 'class' => 'form-control', 'required'=>'required']); ?>
        </div>
            <?= $this->Form->button('Guardar', ['class' => 'btn btn-success btn-cons']) ?>
            <?= $this->Html->link('Cancelar', ['controller' => 'Banks', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?>

          </div>
        </div>
      <?= $this->Form->end() ?>
    </div>
  </div>
</div>

</div>
