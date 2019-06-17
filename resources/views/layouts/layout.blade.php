<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=yes">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet">
   <link href="css/multiselect.css" media="screen" rel="stylesheet" type="text/css">
   <script src="js/jquery.multi-select.js" type="text/javascript"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ url('/') }}">RepositoriosUdi</a>
    </div>
    <ul class="nav navbar-nav">
    
   
       <li class="nav-item">
                                    <a class="nav-link" href="{!!URL::to('/')!!}"> Listar Todos los Proyectos  </a>
                        </li>

                              <li class="nav-item">
                                    <a class="nav-link" href="{!!URL::to('/autores')!!}"> Autores </a>
                        </li>
                             <li class="nav-item">
                                    <a class="nav-link" href="{!!URL::to('/usuarios')!!}"> Usuarios </a>
                        </li>
                           <li class="nav-item">
                                    <a class="nav-link" href="{!!URL::to('/publicaciones')!!}"> Publicaciones</a>
                        </li>
                         <li class="nav-item">
                                    <a class="nav-link" href="{!!URL::to('/Relacion')!!}"> Relacion Autores Proyecto </a>
                        </li>
                        <li class="nav-item">
                                    <a class="nav-link" href="{!!URL::to('contenido/create-step1')!!}"> Registrar Proyectos  </a>
                        </li>
                           @guest


                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('  Login  ') }}</a>
                            </li>
                                   
                            
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('  Registro  ') }}</a>
                            
                        @endguest
                       
                           
                        
                    </ul>
  </div>
</nav>
	
 
	<div class="container-fluid" style="margin-top: 100px">
 
		@yield('content')
	</div>
	<style type="text/css">
	.table {
		border-top: 2px solid #ccc;
 
	}
</style>
</body>
</html>