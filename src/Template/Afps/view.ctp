<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Afp $afp
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Afp'), ['action' => 'edit', $afp->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Afp'), ['action' => 'delete', $afp->id], ['confirm' => __('Are you sure you want to delete # {0}?', $afp->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Afps'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Afp'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dataafps'), ['controller' => 'Dataafps', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dataafp'), ['controller' => 'Dataafps', 'action' => 'add']) ?> </li>
    </ul>
</nav> -->

<ul class="breadcrumb">
    <li>
      <p>PLANILLAS</p>
    </li>
    <li><?= $this->Html->link('Afps', ['controller' => 'Afps', 'action' => 'index'], ['class' => 'active']) ?></li>
  </ul>
  <div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Ver - <span class="semi-bold">Afp</span></h3>
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

<?= $this->Form->create($afp) ?>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('description', ['label' => 'Descripción', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-actions">
        <div class="pull-right">

                
<?= $this->Form->end() ?>

<?= $this->Html->link('Regresar', ['controller' => 'Afps', 'action' => 'index'], ['class' => 'btn btn-info btn-cons']) ?>

              </div>
            </div>
        </div>
      </div>
    </div>
    
  </div>
