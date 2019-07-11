<!-- BEGIN SIDEBAR -->
<div class="page-sidebar " id="main-menu">
        <!-- BEGIN MINI-PROFILE -->
        <div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
          <div class="user-info-wrapper sm">
            <div class="profile-wrapper sm">
              <!-- <img src="assets/img/profiles/avatar.jpg" alt="" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" /> -->

              <?= $this->Html->image("profiles/avatar.jpg", [
                    'width' => "69",
                    'height' => "69"
                ]);  ?>

              <div class="availability-bubble online"></div>
            </div>
            <div class="user-info sm">
              <div class="username">Fred <span class="semi-bold">Smith</span></div>
              <div class="status">Life goes on...</div>
            </div>
          </div>
          <!-- END MINI-PROFILE -->
          <!-- BEGIN SIDEBAR MENU -->
          <p class="menu-title sm">BROWSE <span class="pull-right"><a href="javascript:;"><i class="material-icons">refresh</i></a></span></p>
          <ul>
            <li> <a href="index.html"><i class="material-icons">home</i> <span class="title">Dashboard</span> <span class="arrow"></span></a>
              <ul class="sub-menu">
                <!-- <li><?= $this->Html->link('Personas', ['controller' => 'Persons', 'action' => 'index']) ?></li> -->
                <li><?= $this->Html->link('Funcionalidades', ['controller' => 'Functionalities', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Roles', ['controller' => 'Rols', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Usuarios', ['controller' => 'Users', 'action' => 'index']) ?></li>
              </ul>
            </li>
            <li  class="start">
              <a href="#"> <i class="material-icons">build</i> <span class="title">Mantenimiento</span> <span class="selected"></span><span class="arrow  open "></span></a>

              <ul class="sub-menu">
                <li><?= $this->Html->link('Marcas', ['controller' => 'Manufacturers', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Modelos', ['controller' => 'Models', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Líneas', ['controller' => 'Groups', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Máquinas', ['controller' => 'Machines', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Horómetros', ['controller' => 'Datehorometers', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Mantenimientos Preventivos', ['controller' => 'Programmings', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Mantenimientos Correctivos', ['controller' => 'Correctives', 'action' => 'index']) ?></li>
              </ul>
            </li>

            <li  class="start  open active ">
              <a href="#"> <i class="material-icons">build</i> <span class="title">Planillas</span> <span class="selected"></span><span class="arrow  open "></span></a>

              <ul class="sub-menu">
                <!-- <li><?= $this->Html->link('Trabajadores - Info personal', ['controller' => 'Employeepersonalinformations', 'action' => 'index']) ?></li> -->
                <li><?= $this->Html->link('Trabajadores', ['controller' => 'Employeeworkinformations', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Pais emisor', ['controller' => 'Sendingcountries', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Tipos de zona', ['controller' => 'Zonetypes', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Tipos de documento', ['controller' => 'Documenttypes', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Tipos de via', ['controller' => 'Streettypes', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Nacionalidades', ['controller' => 'Nationalities', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Convenio doble pago', ['controller' => 'Doublepayagreements', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Tipos de pago', ['controller' => 'Paymenttypes', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Situacion educativa', ['controller' => 'Educationalsituations', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Situaciones especiales', ['controller' => 'Specialsituations', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Situaciones', ['controller' => 'Situations', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Periodicidad de remuneracion', ['controller' => 'Periodicityremunerations', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Afps', ['controller' => 'Afps', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Bancos', ['controller' => 'Banks', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Cargos/Categorias', ['controller' => 'Positions', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Ocupaciones', ['controller' => 'Tasks', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Especialidades', ['controller' => 'Specialities', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Tipo de empleados', ['controller' => 'Employeetypes', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Categorias ocupacionales', ['controller' => 'Occupationalcategories', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Actividades', ['controller' => 'Activities', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Regimen pensionario', ['controller' => 'Laborregimes', 'action' => 'index']) ?></li>
                <li><?= $this->Html->link('Tipos  de contrato', ['controller' => 'Contracttypes', 'action' => 'index']) ?></li>
              </ul>
            </li>
          
          <div class="clearfix"></div>
          <!-- END SIDEBAR MENU -->
        </div>