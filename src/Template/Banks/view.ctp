<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bank $bank
 */
?>
<!-- <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bank'), ['action' => 'edit', $bank->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bank'), ['action' => 'delete', $bank->id], ['confirm' => __('Are you sure you want to delete # {0}?', $bank->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Banks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bank'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Databanks'), ['controller' => 'Databanks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Databank'), ['controller' => 'Databanks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="banks view large-9 medium-8 columns content">
    <h3><?= h($bank->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($bank->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($bank->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Created') ?></th>
            <td><?= $this->Number->format($bank->user_created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Modified') ?></th>
            <td><?= $this->Number->format($bank->user_modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($bank->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($bank->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Databanks') ?></h4>
        <?php if (!empty($bank->databanks)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Number Account') ?></th>
                <th scope="col"><?= __('Cci') ?></th>
                <th scope="col"><?= __('Employeeworkinformation Id') ?></th>
                <th scope="col"><?= __('Bank Id') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('User Created') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('User Modified') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($bank->databanks as $databanks): ?>
            <tr>
                <td><?= h($databanks->id) ?></td>
                <td><?= h($databanks->number_account) ?></td>
                <td><?= h($databanks->cci) ?></td>
                <td><?= h($databanks->employeeworkinformation_id) ?></td>
                <td><?= h($databanks->bank_id) ?></td>
                <td><?= h($databanks->status) ?></td>
                <td><?= h($databanks->user_created) ?></td>
                <td><?= h($databanks->created) ?></td>
                <td><?= h($databanks->user_modified) ?></td>
                <td><?= h($databanks->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Databanks', 'action' => 'view', $databanks->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Databanks', 'action' => 'edit', $databanks->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Databanks', 'action' => 'delete', $databanks->id], ['confirm' => __('Are you sure you want to delete # {0}?', $databanks->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
 -->

 <ul class="breadcrumb">
    <li>
      <p>PLANILLAS</p>
    </li>
    <li><?= $this->Html->link('Bancos', ['controller' => 'Banks', 'action' => 'index'], ['class' => 'active']) ?></li>
  </ul>
  <div class="page-title"> <i class="icon-custom-left"></i>
    <h3>Ver - <span class="semi-bold">Banco</span></h3>
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
              <div class="input-with-icon right">
                <?= $this->Form->control('description', ['label' => 'Descripción', 'class' => 'form-control', 'disabled' => 'true']); ?>
              </div>
            </div>

            <div class="form-actions">
        <div class="pull-right">

                
<?= $this->Form->end() ?>

<?= $this->Html->link('Regresar', ['controller' => 'Banks', 'action' => 'index'], ['class' => 'btn btn-info btn-cons']) ?>

              </div>
            </div>
        </div>
      </div>
    </div>
    
  </div>