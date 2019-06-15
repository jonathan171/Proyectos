@extends('principal')
@section('contenido')
 <form method="POST" action="{{ route('proyecto.edit',$proyecto->id) }}"  role="form" class="ubication">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
                                    <td><a href="../../projects/{{$proyecto->proyectimg}}"><img alt="Proyecto Imagen" width="200px" src="../../projects/{{$proyecto->proyectimg}}"/></a></td>
									</div>
								</div>
								<div class="col-xs-8 col-sm-8 col-md-8">
									<div class="form-group">
                                        <label><strong>Resumen</strong></label>
                                        <textarea type="text" rows="10" cols="800" name="autor" id="autor" class="form-control input-sm coloreado" value="{{$proyecto->resumen}}">{{{$proyecto->resumen }}}</textarea>
                                        <!-- <textarea type="text"  class="form-control" id="taskDescription" name="director">{{{ $proyecto['director'] or '' }}}</textarea> -->
									</div>
								</div>

                            </div>

                            <div class="row">
                                <div class="col-xs-10 col-sm-10 col-md-10">
									<div class="form-group">
                                        <label><strong>Titulo</strong></label>
										<input type="text" name="titulo" id="titulo" class="form-control input-sm coloreado" value="{{$proyecto->titulo}}">
									</div>
								</div>
                            </div>

                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
                                        <label><strong>Autor</strong></label>
										<input type="text" name="autor" id="autor" class="form-control input-sm coloreado" value="{{$proyecto->autor}}">
									</div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
                                        <label><strong>Director</strong></label>
										<input type="text" name="director" id="director" class="form-control input-sm coloreado" value="{{$proyecto->director}}">
									</div>
								</div>
                            </div>
                            <div class="row">
                                <div class="col-xs-10 col-sm-10 col-md-10">
									<div class="form-group">
                                        <label><strong>Abstract</strong></label>
										<input type="text" name="abstract" id="abstract" class="form-control input-sm coloreado" value="{{$proyecto->abstract}}">
									</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
                                        <label><strong>Palabras Clave</strong></label>
										<input type="text" name="palabrasclave" id="palabrasclave" class="form-control input-sm coloreado" value="{{$proyecto->palabrasclave}}">
									</div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
									<div class="form-group">
                                        <label><strong>Patrocinador</strong></label>
										<input type="text" name="patrocinador" id="patrocinador" class="form-control input-sm coloreado" value="{{$proyecto->patrocinador}}">
									</div>
                                </div>
                            </div>
							<div class="row">

								<div class="col-xs-12 col-sm-12 col-md-12">
									<!-- <input type="button" href="{!!URL::to('/')!!}" value="Regresar" class="btn btn-success btn-block"> -->
                                    <a type="btn btn-default" href="{!!URL::to('/')!!}"><i class="icon-bag"></i>Regresar - </a>
								</div>

							</div>
						</form>

@endsection
