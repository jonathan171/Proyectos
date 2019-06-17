@extends('layouts.layout')
@section('content')
<div class="row">
	<section class="content">
		<div class="col-md-8 col-md-offset-2">
			@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong>Error!</strong> Revise los campos obligatorios.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
			@if(Session::has('success'))
			<div class="alert alert-info">
				{{Session::get('success')}}
			</div>
			@endif
 
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Nueva Publicacion</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('publicacion.store') }}"  role="form">
							{{ csrf_field() }}
						
 
							
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										  <label for="resumen">Fecha Publicacion</label>
										<input type="date" name="fechaPublicacion" id="fechaPublicacion" class="form-control input-sm" placeholder=">Fecha Publicacion">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										  <label for="resumen">Titulo Repositorio</label>
										<select name="idRepositorio" class="selectpicker">
                                         @foreach ($Repositorios as $repositorio)
									<option value="{{$repositorio->id}}" {{old('estado_id')== $repositorio->id ? 'selected': ''}}>{{$repositorio->titulo}}</option>
									@endforeach
                                         	</select>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										  <label for="resumen">Publicador</label>
										<select name="idEstudiante" class="selectpicker" id="depart" required="true">
                                       @foreach ($Usuarios as $usuario)
									<option value="{{$usuario->id}}" {{old('estado_id')== $usuario->id? 'selected': ''}}>{{ $usuario->name}}</option>
									@endforeach
								</select>
							
									</div>
								</div>
							<br>
							
							<div class="form-group">
								  <label for="resumen">Observacion</label>
								<textarea name="observacion" class="form-control input-sm" placeholder="Observacion"></textarea> 
							</div>
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('publicacion.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>

@endsection