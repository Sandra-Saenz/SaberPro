<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styleC.css') }}">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet"  href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://code.highcharts.com/highcharts.js"></script>
    <script src="http://code.highcharts.com/modules/exporting.js"></script>
</head>
<body>
    <nav class="nav-sidebar">
        <div class="container">
            <div class="sidebar">
                <div class="text">Saber Pro</div>
                <div class="sidebar-menu">
                     <ul>
                        <li><a href="{{ route('preguntas') }}">Home</a></li>
                        <li>
                            <a href="#" class="feat-btn">Usuario
                                <span class="fas fa-arrow-down first"></span></a>
                            <ul class="feat-show">
                                <li><a href="{{ route('vusuario.create') }}">Registrar</a></li>
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
                        <li>
                            <a href="#">Evaluacion</a>
                        </li>
                        <li>
                            <a href="#" class="inf-btn">Informes
                            <span class="fas fa-arrow-down five"></span>
                            </a>
                            <ul class="inf-show">
                                <li><a href="{{ route('vinforme.index') }}">General</a></li>
                                <li><a href="{{ route('vevaluacion.index') }}">Espesifico</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Configuraciones</a></li>
                    </ul>
                </div>
            </div>

            <div class="main-content">
            <header>
                 <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto"></ul>
                    <ul class="navbar-nav ml-auto">

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
         $('.inf-btn').click(function(){
            $('.sidebar ul .inf-show').toggleClass("show4");
            $('.sidebar ul .five').toggleClass("rotate");
        });
        $('.sidebar ul li').click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        });
    </script>
</body>
</html>
