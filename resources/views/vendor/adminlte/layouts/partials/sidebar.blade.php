<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('img/ico-man.png') }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->user }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Opciones</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="{{ url('home') }}"><i class='fa fa-home'></i> <span>{{ trans('adminlte_lang::message.home') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-users'></i> <span>Pacientes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('pacientes') }}" ><i class='fa fa-users'></i><span>Pacientes</span></a></li>
                    <li><a href="{{ url('pacientes/create') }}" ><i class='fa fa-plus'></i><span>Agregar paciente</span></a></li>
                </ul>
            </li>
            <!--....................................................................................--> 
            <li class="treeview">
                <a href="#"><i class='fa fa-heartbeat'></i> <span>Tratamientos</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('tratamientos') }}" ><i class='fa fa-heartbeat'></i><span>Tratamientos</span></a></li>
                    <li><a href="{{ url('tratamientos/create') }}" ><i class='fa fa-plus'></i><span>Agregar tratamiento</span></a></li>
                </ul>
            </li>
            <!--....................................................................................--> 
            <li class="treeview">
            <!--....................................................................................--> 
            <li class="treeview">
              <!--  <a href="#"><i class='fa fa-folder-open'></i> <span>Catálogo de servicios</span> <i class="fa fa-angle-left pull-right"></i></a>-->
              <a href="#"><i class='fa fa-list-alt'></i> <span>Catálogo de servicios</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('catalogoServicio') }}" ><i class='fa fa-book'></i><span>Catálogo de servicios</span></a></li>
                    <li><a href="{{ url('catalogoServicio/create') }}" ><i class='fa fa-plus'></i><span>Agregar servicio</span></a></li>
                </ul>
            </li>
            <!--....................................................................................--> 
            <li class="treeview">
                <a href="#"><i class='fa fa-credit-card-alt'></i> <span>Abono</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('abono') }}" ><i class='fa fa-money'></i><span>Abono</span></a></li>
                    <li><a href="{{ url('abono/create') }}" ><i class='fa fa-plus'></i><span>Agregar abono</span></a></li>
                </ul>
            </li> 
            <!--....................................................................................--> 
            <li class="treeview">
                <a href="#"><i class='fa fa-calendar-o'></i> <span>Citas</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('citas') }}" ><i class='fa fa-calendar-o'></i><span>Citas</span></a></li>
                    <li><a href="{{ url('citas/create') }}" ><i class='fa fa-plus'></i><span>Agendar cita</span></a></li>
                </ul>
            </li>          
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
