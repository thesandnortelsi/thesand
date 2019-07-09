<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<ul class="breadcrumb">
    <li>
      <p>MANTENIMIENTO</p>
    </li>
    <li><?= $this->Html->link('Pre Usos', ['controller' => 'Events', 'action' => 'preuses'], ['class' => 'active']) ?></li>
  </ul>
  <div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Nuevo - <span class="semi-bold">Pre Uso: <?= "[".$machine->code."] ".$machine->name ?></span></h3>
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

                <?= $this->Form->create($event) ?>
<!-- 
            

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('entry', ['label' => 'Fecha de Ingreso', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-group">
              <div class="input-with-icon right">
                <?= $this->Form->control('horometer', ['label' => 'Horómetro de Ingreso', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            
-->
                    <div class="form-actions">
                      <div class="pull-right">
 
                
                        

                        <?= $this->Form->button('Guardar', ['class' => 'btn btn-success btn-cons']) ?>
                        <?= $this->Html->link('Cancelar', ['controller' => 'Manufacturers', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?>

                    </div>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>