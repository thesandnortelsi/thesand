<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Employeepersonalinformation[]|\Cake\Collection\CollectionInterface $employeepersonalinformations
 */
?>


<div class="page-title">
    <h3>Informacion personal</h3>
</div>
<div id="container">


<div class="row-fluid">
    <div class="span12">
      <div class="grid simple ">
        <div class="grid-title">
          <h4><span class="semi-bold">Informacion personal</span></h4>


          <div class="tools">
            <a href="javascript:;" class="collapse"></a>
            <a href="#grid-config" data-toggle="modal" class="config"></a>
            <a href="javascript:;" class="reload"></a>
            <a href="javascript:;" class="remove"></a>
            <a href="javascript:;" class="add"></a>
            <?= $this->Html->link('<i class="material-icons">add</i>', ['controller' => 'Employeepersonalinformations', 'action' => 'add'], ['escape' => false]) ?>
          </div>
        </div>
        <div class="grid-body ">


        <table class="table table-hover table-condensed" id="example2">
            <thead>
                <tr>
                    <!-- <th>Proyecto</th> -->
                    <th>Tipo documento</th>
                    <th>Documento</th>
                    <th>Nombres</th>
                    <th>Sexo</th>
                    <th>Dirección</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employeepersonalinformations as $employeepersonalinformation): ?>
                <tr>
                    <td>
                        <?= 
                        //$employeepersonalinformation->has('documenttype') ? $this->Html->link($employeepersonalinformation->documenttype->abbreviated_description, ['controller' => 'Documenttypes', 'action' => 'view', $employeepersonalinformation->documenttype->id]) : ''

                        $employeepersonalinformation->has('documenttype') ? h($employeepersonalinformation->documenttype->abbreviated_description) : ''

                        ?>
                    </td>
                    <td><?= h($employeepersonalinformation->document) ?></td>
                    <td><?= h($employeepersonalinformation->surname_father.' '.$employeepersonalinformation->surname_mother.' '.$employeepersonalinformation->name) ?></t>
                    <td><?= h($employeepersonalinformation->gender) ?></td>
                    <td><?= h($employeepersonalinformation->document) ?></td>
                    <td><?= h($employeepersonalinformation->email) ?></td>
                    <td><?= h($employeepersonalinformation->phone) ?></td>
                    <td class="actions">
                        <?= $this->Html->link('<i class="material-icons">visibility</i>', ['action' => 'view', $employeepersonalinformation->id], ['escape' => false]) ?>
                        <?= $this->Html->link('<i class="material-icons">edit</i>', ['action' => 'edit', $employeepersonalinformation->id], ['escape' => false]) ?>
                        <?= $this->Form->postLink('<i class="material-icons">delete</i>', ['action' => 'delete', $employeepersonalinformation->id], ['confirm' => __('Está seguro que quiere eliminar:  {0}?', $employeepersonalinformation->document.' - '.$employeepersonalinformation->surname_father.' '.$employeepersonalinformation->surname_mother.' '.$employeepersonalinformation->name), 'escape' => false]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>


        <form action="" class="row">
            <div class="form-group pull-right">
                <?= $this->Html->link('Regresar', ['controller' => 'Employeeworkinformations', 'action' => 'index'], ['class' => 'btn btn-info btn-cons']) ?>
            </div>
        </form>

        </div>
      </div>
    </div>
  </div>

</div>

<!-- 
<div class="employeepersonalinformations index large-9 medium-8 columns content">
    <h3><?= __('Employeepersonalinformations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('') ?></th>
                <th scope="col"><?= $this->Paginator->sort('surname_mother') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('documenttype_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('document') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birthdate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gender') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ubigeo_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nationality_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sendingcountry_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('streettype_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zonetype_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('department') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inside') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mz') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lot') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kilometer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('block') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stage') ?></th>
                <th scope="col"><?= $this->Paginator->sort('zone_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reference') ?></th>
                <th scope="col"><?= $this->Paginator->sort('place_birth') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employeepersonalinformations as $employeepersonalinformation): ?>
            <tr>
                <td><?= $this->Number->format($employeepersonalinformation->id) ?></td>
                <td><?= h($employeepersonalinformation->surname_father) ?></td>
                <td><?= h($employeepersonalinformation->surname_mother) ?></td>
                <td><?= h($employeepersonalinformation->name) ?></td>
                
                <td><?= h($employeepersonalinformation->document) ?></td>
                <td><?= h($employeepersonalinformation->email) ?></td>
                <td><?= h($employeepersonalinformation->birthdate) ?></td>
                <td><?= h($employeepersonalinformation->gender) ?></td>
                <td><?= h($employeepersonalinformation->state) ?></td>
                <td><?= $this->Number->format($employeepersonalinformation->user_created) ?></td>
                <td><?= h($employeepersonalinformation->created) ?></td>
                <td><?= $this->Number->format($employeepersonalinformation->user_modified) ?></td>
                <td><?= h($employeepersonalinformation->modified) ?></td>
                <td><?= $employeepersonalinformation->has('ubigeo') ? $this->Html->link($employeepersonalinformation->ubigeo->ubigeo_id, ['controller' => 'Ubigeos', 'action' => 'view', $employeepersonalinformation->ubigeo->ubigeo_id]) : '' ?></td>
                <td><?= $employeepersonalinformation->has('nationality') ? $this->Html->link($employeepersonalinformation->nationality->id, ['controller' => 'Nationalities', 'action' => 'view', $employeepersonalinformation->nationality->id]) : '' ?></td>
                <td><?= $employeepersonalinformation->has('sendingcountry') ? $this->Html->link($employeepersonalinformation->sendingcountry->id, ['controller' => 'Sendingcountries', 'action' => 'view', $employeepersonalinformation->sendingcountry->id]) : '' ?></td>
                <td><?= $employeepersonalinformation->has('streettype') ? $this->Html->link($employeepersonalinformation->streettype->id, ['controller' => 'Streettypes', 'action' => 'view', $employeepersonalinformation->streettype->id]) : '' ?></td>
                <td><?= $employeepersonalinformation->has('zonetype') ? $this->Html->link($employeepersonalinformation->zonetype->id, ['controller' => 'Zonetypes', 'action' => 'view', $employeepersonalinformation->zonetype->id]) : '' ?></td>
                <td><?= h($employeepersonalinformation->phone) ?></td>
                <td><?= h($employeepersonalinformation->street_name) ?></td>
                <td><?= h($employeepersonalinformation->street_number) ?></td>
                <td><?= h($employeepersonalinformation->department) ?></td>
                <td><?= h($employeepersonalinformation->inside) ?></td>
                <td><?= h($employeepersonalinformation->mz) ?></td>
                <td><?= h($employeepersonalinformation->lot) ?></td>
                <td><?= h($employeepersonalinformation->kilometer) ?></td>
                <td><?= h($employeepersonalinformation->block) ?></td>
                <td><?= h($employeepersonalinformation->stage) ?></td>
                <td><?= h($employeepersonalinformation->zone_name) ?></td>
                <td><?= h($employeepersonalinformation->reference) ?></td>
                <td><?= h($employeepersonalinformation->place_birth) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employeepersonalinformation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employeepersonalinformation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employeepersonalinformation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $employeepersonalinformation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
 -->