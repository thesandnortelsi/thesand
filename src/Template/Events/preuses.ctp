<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<div class="page-title">
    <h3>Pre Usos </h3>
</div>
<div id="container">


    <div class="row-fluid">
            <div class="span12">
              <div class="grid simple ">
                <div class="grid-title">
                  <h4>Lista de <span class="semi-bold">Máquinas</span></h4>

       
                  <div class="tools">
                    <a href="javascript:;" class="collapse"></a>
                    <a href="#grid-config" data-toggle="modal" class="config"></a>
                    <a href="javascript:;" class="reload"></a>
                    <a href="javascript:;" class="remove"></a>
                    <a href="javascript:;" class="add"></a>
                    
                  </div>
                </div>
                <div class="grid-body ">
                  <table class="table table-hover table-condensed" id="example2">
                    <thead>
                      <tr>
                        <th>Área</th>
                        <th>Modelo</th>
                        <th>Linea</th>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Placa</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($machines as $machine): ?>
                            <tr>
                                <td><?= $machine->has('area') ? $this->Html->link($machine->area->name, ['controller' => 'Areas', 'action' => 'view', $machine->area->area_id]) : '' ?></td>
                                <td><?= $machine->has('model') ? $this->Html->link($machine->model->name, ['controller' => 'Models', 'action' => 'view', $machine->model->model_id]) : '' ?></td>
                                <td><?= $machine->has('group') ? $this->Html->link($machine->group->name, ['controller' => 'Groups', 'action' => 'view', $machine->group->group_id]) : '' ?></td>
                                <td><?= h($machine->code) ?></td>
                                <td><?= h($machine->name) ?></td>
                                <td><?= h($machine->plate) ?></td>
                                <td><?= h($machine->state) ?></td>
                                <td class="actions">
                                    <?= $this->Html->link('<i class="material-icons">assignment</i>', ['action' => 'addpreuse', $machine->id], ['escape' => false, 'title' => 'Asignar Pre Uso']) ?>                                    
                                </td>
                            </tr>
                    <?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>


</div>
