<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Examen Saber Pro')</title>
    <meta name="description" content="Pruebas SaberPro - Universidad Popular del Cesar">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#009688">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="#">ECAES</a>
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
        <li><a class="app-menu__item" href="{{ route('home') }}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Home</span></a></li>

        <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Usuarios</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="{{route('vusuario.create')}}"><i class="icon fa fa-circle-o"></i>Registros</a></li>
            <li><a class="treeview-item" href="{{route('vusuario.index')}}"><i class="icon fa fa-circle-o"></i>Consulta</a></li>
            <li><a class="treeview-item" href="{{route('vuserProgran.index')}}"><i class="icon fa fa-circle-o"></i>Asignar Programa</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#4</a></li>
          </ul>
        </li>

      <li class="treeview"><a class="app-menu__item" href="{{route('')}}" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Facultades</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="{{route('facultad.index')}}"><i class="icon fa fa-circle-o"></i>Listado</a></li>
          <li><a class="treeview-item" href="{{route('facultad.create')}}"><i class="icon fa fa-circle-o"></i>Registrar</a></li>
          <li><a class="treeview-item" href="{{route('facultad.edit')}}"><i class="icon fa fa-circle-o"></i>Editar</a></li>
          <li><a class="treeview-item" href="{{route('')}}"><i class="icon fa fa-circle-o"></i>#4</a></li>
        </ul>
      </li>

      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Programas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="{{route('programa.index')}}"><i class="icon fa fa-circle-o"></i>Listado</a></li>
          <li><a class="treeview-item" href="{{route('programa.create')}}"><i class="icon fa fa-circle-o"></i>Registrar</a></li>
          <li><a class="treeview-item" href="{{route('programa.edit')}}"><i class="icon fa fa-circle-o"></i>Editar</a></li>
          <li><a class="treeview-item" href="{{route('')}}"><i class="icon fa fa-circle-o"></i>#4</a></li>
        </ul>
      </li>

      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Competencias</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="{{route('competencia.index')}}"><i class="icon fa fa-circle-o"></i>Listado</a></li>
          <li><a class="treeview-item" href="{{route('ompetencia.create')}}"><i class="icon fa fa-circle-o"></i>Registrar</a></li>
          <li><a class="treeview-item" href="{{route('ompetencia.edit')}}"><i class="icon fa fa-circle-o"></i>Editar</a></li>
          <li><a class="treeview-item" href="{{route('')}}"><i class="icon fa fa-circle-o"></i>#4</a></li>
        </ul>
      </li>

      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Asignaturas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="{{route('asignatura.index')}}"><i class="icon fa fa-circle-o"></i>Listado</a></li>
          <li><a class="treeview-item" href="{{route('asignatura.create')}}"><i class="icon fa fa-circle-o"></i>Registrar</a></li>
          <li><a class="treeview-item" href="{{route('asignatura.edit')}}"><i class="icon fa fa-circle-o"></i>Editar</a></li>
          <li><a class="treeview-item" href="{{route('')}}"><i class="icon fa fa-circle-o"></i>#4</a></li>
        </ul>
      </li>

      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-edit"></i><span class="app-menu__label">Preguntas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="{{route('pregunta.index')}}"><i class="icon fa fa-circle-o"></i>Listado</a></li>
          <li><a class="treeview-item" href="{{route('pregunta.create')}}"><i class="icon fa fa-circle-o"></i>Registrar</a></li>
          <li><a class="treeview-item" href="{{route('pregunta.edit')}}"><i class="icon fa fa-circle-o"></i>Editar</a></li>
          <li><a class="treeview-item" href="{{route('')}}"><i class="icon fa fa-circle-o"></i>#4</a></li>
        </ul>
      </li>

      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Pruebas</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="{{route('vprueva.consultaCompleta')}}"><i class="icon fa fa-circle-o"></i>Consultas</a></li>
          <li><a class="treeview-item" href="{{route('ProgramaAsignatura.index')}}"><i class="icon fa fa-circle-o"></i>Asignar</a></li>
          <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#3</a></li>
        </ul>
      </li>

      <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-file-text"></i><span class="app-menu__label">Informes</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
          <li><a class="treeview-item" href="{{ route('vinforme.index') }}"><i class="icon fa fa-circle-o"></i>Generales</a></li>
          <li><a class="treeview-item" href="{{route('vevaluacion.index')}}"><i class="icon fa fa-circle-o"></i>espesificos</a></li>
          <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#3</a></li>
          <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>#4</a></li>
        </ul>
      </li>

      <li><a class="app-menu__item" href="{{ route('preguntas') }}"><i class="app-menu__icon fa fa-pie-chart"></i><span class="app-menu__label">Acerca De</span></a></li>
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
