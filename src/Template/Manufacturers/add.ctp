<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Manufacturer $manufacturer
 */
?>

          <ul class="breadcrumb">
            <li>
              <p>MANTENIMIENTO</p>
            </li>
            <li><?= $this->Html->link('Marcas', ['controller' => 'Manufacturers', 'action' => 'index'], ['class' => 'active']) ?></li>
          </ul>
          <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Nueva - <span class="semi-bold">Marca</span></h3>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="grid simple form-grid">
                <div class="grid-title no-border">
                  <!-- <h4>Traditional <span class="semi-bold">Validation</span></h4> -->
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                  </div>
                </div>
                <div class="grid-body no-border">
                  <!-- <form action="#" id="form_traditional_validation" name="form_traditional_validation" role="form" autocomplete="off" class="validate"> -->

                <?= $this->Form->create($manufacturer) ?>

                    <div class="form-group">
                      <!-- <label class="form-label">Amount</label> <span class="help">e.g. "5000"</span> -->
                      <!-- <input class="form-control" id="form1Amount" name="form1Amount" type="number" required> -->
                      <?= $this->Form->control('name', [ 'label' =>'Nombre', ' class' => 'form-control']); ?>
                    </div>
                    <div class="form-group">
                      <!-- <label class="form-label">Card Holder's Name</label> <span class="help">e.g. "Jane Smith"</span> -->
                      <div class="input-with-icon right">
                        <!-- <i class=""></i> -->
                        <!-- <input class="form-control" id="form1CardHolderName" name="form1CardHolderName" type="text" required> -->
                        <?= $this->Form->control('description', [ 'label' =>'Descripción', 'class' => 'form-control']); ?>
                      </div>
                    </div>
                    <div class="form-group">
                      <!-- <label class="form-label">Card Number</label>z <span class="help">e.g. "5689569985"</span> -->
                      <div class="input-with-icon right">
                        <!-- <input class="form-control" id="form1CardNumber" name="form1CardNumber" type="text" type=text pattern="[0-9]{13,16}" required> -->
                        <?= $this->Form->control('state', [ 'label' => 'Estado', 'class' => 'form-control select2', 'data-init-plugin' => 'select2', 'options' => ['ACTIVO' => 'ACTIVO', 'INACTIVO' => 'INACTIVO']]); ?>
                      </div>
                    </div>
                    <div class="form-actions">
                      <div class="pull-right">
                        <!-- <button class="btn btn-success btn-cons" type="submit"><i class="icon-ok"></i> Save</button>
                        <button class="btn btn-white btn-cons" type="button">Cancel</button> -->

                        <?= $this->Form->button('Guardar', ['class' => 'btn btn-success btn-cons']) ?>
                        <?= $this->Html->link('Cancelar', ['controller' => 'Manufacturers', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?>
    
                      </div>
                    </div>
                  <?= $this->Form->end() ?>
                </div>
              </div>
            </div>
            
          </div>
          
          

