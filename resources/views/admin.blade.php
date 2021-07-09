<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/styleC.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <nav class="nav-sidebar">
        <div class="container">
            <div class="sidebar">
                <div class="text">SABER PRO</div>
                <div class="sidebar-menu">
                     <ul>
                        <li><a href="#">Home</a></li>
                        <li>
                            <a href="#" class="feat-btn">Usuario
                                <span class="fas fa-arrow-down first"></span></a>
                            <ul class="feat-show">
                                <li><a href="{{ route('register') }}">Registrar</a></li>
                                <li><a href="{{ route('vusuario.index') }}">Consultar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="serv-btn">Programa
                            <span class="fas fa-arrow-down second"></span></a>
                            <ul class="serv-show">
                                <li><a href="#">Registrar</a></li>
                                <li><a href="#">Consultar</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="preg-btn">Pregunta
                            <span class="fas fa-arrow-down tree"></span></a>
                            <ul class="preg-show">
                                <li><a href="#">Cargar</a></li>
                                <li><a href="#">Consulta</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Evaluacion</a></li>
                        <li><a href="#">Informes</a></li>
                        <li><a href="#">Configuraciones</a></li>
                    </ul>
                </div>
            </div>

            <div class="main-content">
            <header>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto"></ul>
                        <ul class="navbar-nav ml-auto">
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                     <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->cargo }}
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Salir') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </header>

                <main>
                    @yield('content')
                </main>
            </div>
        </div>
    </nav>

    <script>
        $('.feat-btn').click(function(){
            $('.sidebar ul .feat-show').toggleClass("show");
            $('.sidebar ul .first').toggleClass("rotate");
        });
        $('.serv-btn').click(function(){
            $('.sidebar ul .serv-show').toggleClass("show1");
            $('.sidebar ul .second').toggleClass("rotate");
        });
        $('.preg-btn').click(function(){
            $('.sidebar ul .preg-show').toggleClass("show2");
            $('.sidebar ul .tree').toggleClass("rotate");
        });
        $('.sidebar ul li').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });
    </script>
</body>
</html>
