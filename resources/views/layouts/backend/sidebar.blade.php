<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ Auth::user()->gravatar }}" class="img-circle" alt="{{ Auth::user()->name }}">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li>
          <a href="{{ url('/home') }}">
            <i class="fa fa-dashboard"></i> <span>Nadzorna ploča</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-newspaper-o"></i>
            <span>Novosti</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('novosti.index') }}"><i class="fa fa-circle-o"></i> Sve novosti</a></li>
            <li><a href="{{ route('novosti.create') }}"><i class="fa fa-circle-o"></i> Dodaj novu</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i>
            <span>Igrači</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('igraci.index') }}"><i class="fa fa-circle-o"></i> Svi igrači</a></li>
            <li><a href="{{ route('igraci.create') }}"><i class="fa fa-circle-o"></i> Dodaj novog igrača</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar"></i>
            <span>Sezone</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('sezone.index') }}"><i class="fa fa-circle-o"></i> Sve sezone</a></li>
            <li><a href="{{ route('sezone.create') }}"><i class="fa fa-circle-o"></i> Dodaj novu sezonu</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-image"></i>
            <span>Albumi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('albumi.index') }}"><i class="fa fa-circle-o"></i> Svi albumi</a></li>
            <li><a href="{{ route('albumi.create') }}"><i class="fa fa-circle-o"></i> Dodaj novi album</a></li>
          </ul>
        </li>
        <li><a href="{{ route('users.index') }}"><i class="fa fa-user"></i> <span>Korisnici</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-stack-overflow"></i>
            <span>Turniri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('turniri.index') }}"><i class="fa fa-circle-o"></i> Svi turniri</a></li>
            <li><a href="{{ route('turniri.create') }}"><i class="fa fa-circle-o"></i> Dodaj novi turnir</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-stack-overflow"></i>
            <span>Piramide</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('piramida.index') }}"><i class="fa fa-circle-o"></i> Sve piramide</a></li>
            <li><a href="{{ route('piramida.create') }}"><i class="fa fa-circle-o"></i> Dodaj nove piramide</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>