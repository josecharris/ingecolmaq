  <style type="text/css">
       .bg-gradient-primary {
          background-color: #f6c23e;
          background-image: linear-gradient(180deg,#1d2335 100%,#5d3be7 100%);
          background-size: cover;
        }

        .opciones{
          background-color: #27ae607d;
          width: 250px;
          height: 600px;
          float: left;
        }
  </style>
<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center"
      href="<?php echo RUTA.'index.php' ?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SISTEMAQ<sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo RUTA .'index.php'?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Administracion</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Modulos principales
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <i class="fas fa-clipboard-list"></i>
          <span>Preoperacionales e inspección</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header" style="color: white;"><strong>Vista de administrador</strong></h6>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <h6 class="collapse-header" style="color: white;"><strong>Preoperacionales</strong></h6>

            <a class="nav-link" href="<?php echo RUTA .'views/preoperacional/history.view.php'?>">
              <i class="fas fa-scroll"></i>
              <span>Consultar historial</span>
            </a> 
          </div>
          <div class="bg-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header" style="color: white;"><strong>Vista de administrador</strong></h6>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <h6 class="collapse-header" style="color: white;"><strong>Inspección</strong></h6>

            <a class="nav-link" href="<?php echo RUTA .'views/inspeccion/history.view.php'?>">
              <i class="fas fa-scroll"></i>
              <span>Consultar historial</span>
            </a> 
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-copy"></i>
          <span>Vigencia documental</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header"><strong style="color: white;">Planes de Mantenimiento:</strong></h6>
            <a class="nav-link" href="<?php echo RUTA .'buttons.php'?>">
              <span>Agregar Plan</span>
            </a> 
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
          <i class="fas fa-chart-bar"></i>
          <span>Consumos</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header" style="color: white;"><strong>Módulo de consumos</strong></h6>
            <a class="nav-link" href="<?php echo RUTA .'validaciones_vistas/agregar_consumo.php'?>">
              <i class="fas fa-plus-circle"></i>
              <span>Agregar Consumo</span>
            </a>
            <a class="nav-link" href="<?php echo RUTA .'views/consumo/show.view.php'?>">
              <i class="fas fa-poll"></i>
              <span>Indice de consumo</span>
            </a> 
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-search"></i>
          <span>Consultar</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-primary py-2 collapse-inner rounded">
            <h6 class="collapse-header" style="color: white"><strong>Gestion: </strong></h6>
            <a class="collapse-item" href="<?php echo RUTA.'validaciones_vistas/mostrar_inventario.php' ?>">
              <i class="fas fa-book"></i>
              <span style="color: white;">Inventario Maquinaria</span>
            </a>
            <a class="collapse-item" href="<?php echo RUTA .'Agenda.php'?>">
              <span style="color: white;">Agenda</span>
            </a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Opciones
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Gestion de Informes</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Documentos:</h6>
            <a class="collapse-item" href="<?php echo RUTA .'login.html'?>">Informes</a>
          
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Mantenimiento Correctivo</span></a>
      </li>

       <!-- Nav Item - Exit -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo RUTA.'close.php' ?>">
          <i class="fas fa-fw fa-window-close"></i>
          <span>Salir</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->