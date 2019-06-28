<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Datehorometer $datehorometer
 */
?>
          <ul class="breadcrumb">
            <li>
              <p>MANTENIMIENTO</p>
            </li>
            <li><?= $this->Html->link('Horómetros', ['controller' => 'Datehorometers', 'action' => 'index'], ['class' => 'active']) ?></li>
          </ul>
          <div class="page-title"> <i class="icon-custom-left"></i>
            <h3>Nuevo - <span class="semi-bold">Horómetro</span></h3>
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

                <?= $this->Form->create($datehorometer) ?>

                    <div class="form-group">
                      <!-- <label class="form-label">Amount</label> <span class="help">e.g. "5000"</span> -->
                      <!-- <input class="form-control" id="form1Amount" name="form1Amount" type="number" required> -->
                      <?= $this->Form->control('date', ['label' => 'Fecha', 'type' => 'date', 'value' => date('Y-m-d')]); ?>
                    </div>
                
                <div class="form-actions">
                      <div class="pull-right">
                        <?= $this->Form->button('Generar', ['class' => 'btn btn-success btn-cons']) ?>
                    </div>
                </div>

                <?= $this->Form->end() ?>
                </div>
              </div>
            </div>
            
          </div>