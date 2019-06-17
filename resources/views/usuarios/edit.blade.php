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
					<h3 class="panel-title">Editar Usuario</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('usuario.update',$usuario->id) }}"  role="form">
							{{ csrf_field() }}
							<input name="_method" type="hidden" value="PATCH">
							<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										  <label for="resumen">nombre</label>
										<input type="text" name="name" id="nombre" class="form-control input-sm" placeholder="nombre" value="{{$usuario->name}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										  <label for="resumen">email</label>
										<input type="mail" name="email" id="email" class="form-control input-sm" placeholder=">email" value="{{$usuario->email}}">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										  <label for="resumen">Estado</label>
										<select name="estado" class="selectpicker" id="estado" required="true">
                                       <option value="0">inactivo</option>
                                          <option value="1">activo</option>
								</select>
							
									</div>
								</div>
							<br>
							
							<div class="form-group">
								 <label for="resumen">Roll</label>
						  <select name="rolID" class="selectpicker" >
                                         @foreach ($Roles as $roll)
									<option value="{{$roll->id}}" {{old('estado_id')== $roll->id ? 'selected': ''}}>{{$roll->descripcion}}</option>
									@endforeach
                                         	</select>
							</div>
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('usuario.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</di>
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	@endsection