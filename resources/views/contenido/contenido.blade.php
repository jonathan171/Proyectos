@extends('principal')
@section('contenido')
<main class="main">
            <!-- Breadcrumb -->
            <!-- <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol> -->
            <div class="container-fluid">
                <!-- Ejemplo de tabla Listado -->
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Proyectos de Grado
                        <!-- <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modalNuevo">
                            <i class="icon-plus"></i>&nbsp;Nuevo
                        </button> -->
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <!-- <div class="input-group">
                                    <select class="form-control col-md-3" id="autor" name="autor">
                                      <option value="fecha">Fecha Publicacion  </option>
                                      <option value="autor">Autor</option>
                                      <option value="titulo">Titulo</option>
                                    </select>
                                    <input type="text" id="texto" name="texto" class="form-control" placeholder="Texto a buscar">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar</button>
                                </div> -->
                                <p class="titulo">BUSQUEDA DE PROYECTOS DE GRADO</p>
                                {{ Form::open(['route' => 'proyectos', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                                     <div class="form-group">
                                        {{Form::text('autor', null, ['class'=>'form-control', 'placeholder'=>'Autor'])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('titulo', null, ['class'=>'form-control', 'placeholder'=>'Titulo'])}}
                                    </div>
                                    <div class="form-group">
                                        {{Form::text('fecha', null, ['class'=>'form-control', 'placeholder'=>'Fecha de Publicacion'])}}
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Buscar

                                    </button>
                                {!! Form::close() !!}
                            </div>
                        </div>
                        <table class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>Detalle de Proyecto</th>
                                    <th scope="col">Ver/Descargar</th>
                                    <th scope="col">TituloDelProyecto</th>
                                    <th scope="col">Autor</th>
                                    <th scope="col">Fecha</th>
                                    <!-- <th scope="col">Identificacin</th>
                                    <th scope="col">Email</th> -->
                                    <!-- <th scope="col">Director</th>
                                    <th scope="col">Evaluador</th> -->
                                    <th scope="col">Resumen</th>
                                    <!-- <th scope="col">Abstract</th> -->
                                    <!-- <th scope="col">Palabras Clave</th> -->
                                    <!-- <th scope="col">Keywords</th> -->
                                    <!-- <th scope="col">Patrocinador</th> -->

                                </tr>
                            </thead>
                            <tbody>
        @foreach($proyectos as $proyecto)
            <tr>
                <td>

                    <!-- <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#modalNuevo">
                        <i class="icon-pencil"></i>
                    </button> &nbsp; -->
                    <!-- <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modalEliminar">
                        <i class="icon-trash"></i>
                    </button> -->

                    <!-- <a class="btn btn-warning"  data-toggle="modal" data-target="#modalNuevo" href="{{action('ProyectoController@edit', $proyecto->id)}}" ><i class="icon-pencil"></i></a> -->
                    <a class="btn btn-warning" href="{{action('ProyectoController@edit', $proyecto->id)}}" ><i class="icon-pencil"></i></a>

                </td>
                <!-- <th scope="row">{{$proyecto->id}}</th>-->
                <td><a href="../projects/{{$proyecto->proyectimg}}"><img alt="Proyecto Imagen" width="200px" src="../projects/{{$proyecto->proyectimg}}"/></a></td>
                <td><a href="../projects/{{$proyecto->proyectimg}}">{{$proyecto->titulo}}</a></td>
                <td>{{$proyecto->autor}}</td>
                <td>{{$proyecto->fecha}}</td>
                <!-- <td>{{$proyecto->identificacion}}</td>
                 <td>{{$proyecto->email ? 'Yes' : 'No'}}</td> -->
                <!-- <td>{{$proyecto->director}}</td>
                <td>{{$proyecto->evaluador}}</td> -->
                <td>{{$proyecto->resumen}}</td>
                <!-- <td>{{$proyecto->abstract}}</td> -->
                <!-- <td>{{$proyecto->palabrasclave}}</td> -->
                <!-- <td>{{$proyecto->keywords}}</td> -->
                <!-- <td>{{$proyecto->patrocinador}}</td> -->
                <!-- <td><a href="../projects/{{$proyecto->proyectimg}}">{{$proyecto->proyectImg}}</a></td> -->


            </tr>
        @endforeach
        </tbody>
                        </table>
                        {!!$proyectos->render()!!}

                    </div>
                </div>
                <!-- Fin ejemplo de tabla Listado -->
            </div>
            <!--Inicio del modal agregar/actualizar-->
            <div class="modal fade" id="modalNuevo" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-primary modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Detalle Proyecto de Grado</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="text-input">Nombre</label>
                                    <div class="col-md-9">
                                        <input type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre de categoría">
                                        <span class="help-block">(*) Ingrese el nombre de la categoría</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 form-control-label" for="email-input">Descripción</label>
                                    <div class="col-md-9">
                                        <input type="email" id="descripcion" name="descripcion" class="form-control" placeholder="Enter Email">
                                    </div>
                                </div>
                            </form> -->


            <!-- aqui empieza form modal -->
            <!-- <form method="POST" action="{{ route('proyecto.edit',$proyecto->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="autor" id="autor" class="form-control input-sm" value="{{$proyecto->autor}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="titulo" id="titulo" class="form-control input-sm" value="{{$proyecto->titulo}}">
									</div>
								</div>
							</div>


							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">

								</div>

							</div>
						</form> -->
            <!-- aqui acaba form modal -->






                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-primary">Guardar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!--Fin del modal-->
            <!-- Inicio del modal Eliminar -->
            <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-danger" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Eliminar Categoría</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Estas seguro de eliminar la categoría?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="button" class="btn btn-danger">Eliminar</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- Fin del modal Eliminar -->
        </main>
    @endsection
