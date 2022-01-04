<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Pruebas Saber Pro - Universidad Popular del Cesar">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#009688">
    <title>@yield('title', 'Examen Saber Pro')</title>
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#">Saber Pro</a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  {{ __('Salir') }}
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </div>
          </ul>
        </li>
      </ul>
    </header>

    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="Imagenes/user.jpg" alt="User Image">
        <div>
          <p class="app-sidebar__user-designation">{{ Auth::user()->cargo }}</p>
        </div>
      </div>

      <ul class="app-menu">
         <ul class="app-menu">
        <li><a class="app-menu__item" href="{{ route('usuario') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Mis Datos</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('misDatos') }}"><i class="icon fa fa-circle-o"></i>Informacion</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Cambios</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#3</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#4</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Mis Pruebas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('UserPrograma.obtener', Auth::user()->id)}}"><i class="icon fa fa-circle-o"></i>Registro</a></li>
            <li><a class="treeview-item" href="{{ route('vprueva.consulta', Auth::user()->id)}}"><i class="icon fa fa-circle-o"></i>Consulta</a></li>
            <li><a class="treeview-item" href="{{ route('calendario') }}"><i class="icon fa fa-circle-o"></i>Calendario</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#4</a></li>
          </ul>
        </li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Mis Informes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{ route('vevaluacion.show', Auth::user()->id) }}"><i class="icon fa fa-circle-o"></i>Consultas</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Fortalecer</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#3</a></li>
          </ul>
        </li>

        <li><a class="app-menu__item" href="#"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Acerca De</span></a></li>
      </ul>
    </aside>

    <main class="app-content">
      @yield('content')
    </main>

    @yield('scrip')

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/plugins/pace.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>

    <footer class="bg-white text-center text-black-50 py-3 shadow">
        {{config('app.name')}} | copyright @ {{date('Y')}}
    </footer>
  </body>
</html>
