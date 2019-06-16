<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Repositorio - Proyectos">
    <meta name="author" content="duvan.com">
    <meta name="keyword" content="Repositorio, Proyectos de grado">
    <!-- <link rel="shortcut icon" href="img/favicon.png"> -->
    <title>Repositorio - Proyectos de grado</title>
    <!-- Icons -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/simple-line-icons.min.css') }}" rel="stylesheet">
    <!-- <link href="css/simple-line-icons.min.css" rel="stylesheet"> -->
    <!-- Main styles for this application -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <!-- <a class="navbar-brand" href="#"></a> -->
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
          <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item px-3">
                <a class="nav-link" href="#">BIENVENIDOS</a>
            </li>
            <!-- <li class="nav-item px-3">
                <a class="nav-link" href="#">Configuraciones</a>
            </li> -->
        </ul>
        <!-- <ul class="nav navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="img/avatars/6.jpg" class="img-avatar" alt="duvan@udi.edu.co">
                    <span class="d-md-down-none">admin </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Cuenta</strong>
                    </div>

                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Perfil</a>
                    <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Cerrar sesión</a>

                </div>
            </li>
        </ul> -->
        <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                                    <a class="nav-link" href="{!!URL::to('/')!!}"> Listar Todos los Proyectos  </a>
                        </li>
                        <li class="nav-item">
                                    <a class="nav-link" href="{!!URL::to('/autores')!!}"> Autores </a>
                        </li>
                         <li class="nav-item">
                                    <a class="nav-link" href="{!!URL::to('/Relacion')!!}"> Relacion Profesores Proyecto </a>
                        </li>
                        <li class="nav-item">
                                    <a class="nav-link" href="{!!URL::to('contenido/create-step1')!!}"> Registrar Proyectos  </a>
                        </li>


                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('  Login  ') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('  Registro  ') }}</a>
                                </li>
                            @endif
                        @else
                       
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesion') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
    </header>




    <footer class="app-footer">
        <span><a href="http://www.duvanzapata.com/">Repositorio</a> &copy; 2019</span>
        <span class="ml-auto">Desarrollado por <a href="http://www.duvanzapata.com/">Duvan Zapata Ltda</a></span>
    </footer>

    <!-- Bootstrap and necessary plugins -->
    <!-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> -->
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <!-- <script src="js/popper.min.js"></script> -->
    <script src="{{asset('/js/popper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>

    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <script src="js/pace.min.js"></script> -->
    <script src="{{asset('/js/pace.min.js')}}"></script>
    <!-- Plugins and scripts required by all views -->
    <script src="{{asset('/js/Chart.min.js')}}"></script>

    <script src="{{asset('/js/template.js')}}"></script>
    <!-- GenesisUI main scripts -->
    <!-- <script src="js/template.js"></script> -->
</body>

</html>
