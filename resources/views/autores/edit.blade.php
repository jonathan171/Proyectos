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
					<h3 class="panel-title">editar Autor</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('autor.update',$autores->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="cedula" id="cedula" class="form-control input-sm" placeholder="cedula del autor" value="{{$autores->cedula}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="nombre del autor" value="{{$autores->nombre}}">
									</div>
								</div>
							</div>
 
							<div class="form-group">
								<input type="text"  name="email" class="form-control input-sm" placeholder="email del autor" value="{{$autores->email}}">
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="date" name="fechanac" id="fechanac" class="form-control input-sm" placeholder=">Fecha nacimiento" value="{{$autores->fechanac}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<select name="genero"  class="form-control input-lg value="{{$autores->genero}}">
                                         <option value="masculino">Masculino</option>
                                         <option value="femenino">Femenino</option>
                                         <option value="sin especificar">Sin especificar</option>
                                         </select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<input name="celular" class="form-control input-sm" placeholder="numero de celular" value="{{$autores->celular}}"></textarea>
							</div>
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Actualizar" class="btn btn-success btn-block">
									<a href="{{ route('autor.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection