<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Programming $programming
 */
?>
<ul class="breadcrumb">
    <li>
      <p>MANTENIMIENTO</p>
    </li>
    <li><?= $this->Html->link('Mantenimientos Preventivos', ['controller' => 'Programmings', 'action' => 'index'], ['class' => 'active']) ?></li>
    </ul>
    <div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Nueva - <span class="semi-bold">Programación de Mantenimiento Preventivo</span></h3>
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

        <?= $this->Form->create($programming) ?>

            <div class="row form-row">
              <div class="input-with-icon right">
                <div class="col-md-4">
                    <?= $this->Form->control('year', [ 'label' => 'Año', 'class' => 'form-control select2', 'data-init-plugin' => 'select2', 'options' => ['2019' => '2019']]); ?>
                </div>
              </div>
            </div>
            <div class="form-actions">
              <div class="pull-right">

                <?= $this->Form->button('Generar', ['class' => 'btn btn-success btn-cons']) ?>
                <?= $this->Html->link('Cancelar', ['controller' => 'Programmings', 'action' => 'index'], ['class' => 'btn btn-white btn-cons']) ?>

              </div>
            </div>
          <?= $this->Form->end() ?>
        </div>
      </div>
    </div>

    </div>

