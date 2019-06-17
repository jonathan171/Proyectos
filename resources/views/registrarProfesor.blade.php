@extends('layouts.layout')
@section('content')
<div class="container">
<div class="panel-heading"><h2>Registrar Nuevo Profesor</h2></div>
<form  class="ubication" action="{{route('addProfesor')}}"  method="POST" >
 {{ csrf_field() }}
		                        <div class="form-group">
								<label for="exampleInputEmail1">Cedula  </label>

								<input type="text" class="form-control" id="cedula_form" name="cedula" value=""  placeholder="ingrese cedula del profesor"  required="true" maxlength="60">
								<small id="emailHelp" class="form-text text-muted">
								
							</div>	
							<div class="form-group">
								<label for="exampleInputEmail1">Nombre </label>

								<input type="text" class="form-control" id="nombre_form" name="nombre" value=""  placeholder="ingrese nombre del  profesor"  required="true" maxlength="60">
								<small id="emailHelp" class="form-text text-muted">
								
							</div>					
                              <div class="entrar">
								<button type="submit" class="btn btn-primary btn-block btn-lg" onclick="return confirm('Esta SEGURO que desea Guardar este profesor?')" >
									Registrar
								</button>
							</div>

</form>
</div>



@endsection