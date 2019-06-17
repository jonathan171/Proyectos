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
					<h3 class="panel-title">Nuevo Autor</h3>
				</div>
				<div class="panel-body">					
					<div class="table-container">
						<form method="POST" action="{{ route('autor.store') }}"  role="form">
							{{ csrf_field() }}
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="cedula" id="cedula" class="form-control input-sm" placeholder="cedula del autor">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="text" name="nombre" id="nombre" class="form-control input-sm" placeholder="nombre del autor">
									</div>
								</div>
							</div>
 
							<div class="form-group">
								<input type="text"  name="email" class="form-control input-sm" placeholder="email del autor">
							</div>
							<div class="row">
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<input type="date" name="fechanac" id="fechanac" class="form-control input-sm" placeholder=">Fecha nacimiento">
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<select name="genero" class="selectpicker">
                                         <option value="Masculino">Masculino</option>
                                         <option value="Femenino">Femenino</option>
                                         <option value="Sin especificar">Sin especificar</option>
                                         	</select>
									</div>
								</div>
								<div class="col-xs-6 col-sm-6 col-md-6">
									<div class="form-group">
										<select name="departamento" class="selectpicker" id="depart" required="true">
                                       @foreach ($estadosArray as $index =>  $descripcion)
									<option value="{{$index}}" {{old('estado_id')== $index ? 'selected': ''}}>{{ $descripcion}}</option>
									@endforeach
								</select>
							
									</div>
								</div>
							<br>
							
							<div class="form-group">
								<input name="celular" class="form-control input-sm" placeholder="numero de celular">
							</div>
							<div class="row">
 
								<div class="col-xs-12 col-sm-12 col-md-12">
									<input type="submit"  value="Guardar" class="btn btn-success btn-block">
									<a href="{{ route('autor.index') }}" class="btn btn-info btn-block" >Atrás</a>
								</div>	
 
							</div>
						</form>
					</div>
				</div>
 
			</div>
		</div>
	</section>
	<script type="text/javascript">
		
		/*$.ajaxSetup({
             headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')     
     }
 }); 
	</script>
	<script >
/*	
$(document).ready(function(){

 $('#depart').on('change',function(){

  var punto = document.getElementById("depart").value;
   alert(punto);
      $.ajax({
          route: 'ciudades',
          type: 'GET',
          data: {punto:punto},
          dataType: 'JSON',
          error: function(respuesta) {alert("Error...");},
          success: function(respuesta) {
            if (respuesta) {
              alert("Exito...");
              return false;
            }else {
              alert("Error...");return false;
            }
          }
      });
 });
});
*/

</script>
	@endsection
