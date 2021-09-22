<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('frontend') }}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Daniel Rodríguez</p>
          <a href="#"><i class="fa fa-circle text-success"></i> En línea</a>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENÚ NAVEGACIÓN</li>
        <li class="active treeview">
          <a href="home?#">
            <i class="fa fa-dashboard"></i> <span>Inicio</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Inmuebles Disponibles</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="lotes"><i class="fa fa-circle-o"></i> Lotes</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Viviendas</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Condominios</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Cotizaciones</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Ventas</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Créditos</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Cobros</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-laptop"></i>
            <span>Administrar Usuarios</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/UI/general.html"><i class="fa fa-circle-o"></i> Clientes</a></li>
            <li><a href="pages/UI/icons.html"><i class="fa fa-circle-o"></i> Agentes</a></li>
            <li><a href="pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Administradores</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Reporte de Compras</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> Reporte 1</a></li>
            <li><a href="pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Reporte 2</a></li>
            <li><a href="pages/forms/editors.html"><i class="fa fa-circle-o"></i> Reporte 3</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
