@extends('principal')
@section('contenido')
<div class="container">
<div class="panel-heading"><h2>Registrar relacion</h2></div>
<form  class="ubication" action="{{route("RegistrarRelacion")}}" method="POST">
 {{ csrf_field() }}
<div class="form-group">
	<label for="exampleInputEmail1">proyecto  </label>
		<select class="form-control input-lg" name="proyecto" required="true">

			<option value="{{ old('proyecto')== null? '' : old('proyecto')}}" >{{ old('proyecto')== null? "Seleccione Un proyecto" : old('proyecto')}}</option>

			@foreach ($lista_proyectos as $proyecto)
			<option value="{{ $proyecto->id}}">{{ $proyecto->titulo}}</option>
					@endforeach
			</select>
		</div>
       <div class="form-group">
	<label for="exampleInputEmail1">Rol del profesor   </label>
		<select class="form-control input-lg" name="rol" required="true">

			<option value="{{ old('rol')== null? '' : old('rol')}}" >{{ old('rol')== null? "Seleccione Un rol" : old('rol')}}</option>

			@foreach ($lista_tipos as $tipo)
			<option value="{{ $tipo->id}}">{{ $tipo->tipo_profesor}}</option>
					@endforeach
			</select>
		</div>

          <div class="form-group">
	<label for="exampleInputEmail1">profesor   </label>
		<select class="form-control input-lg" name="profesor" required="true">

			<option value="{{ old('profesor ')== null? '' : old('profesor ')}}" >{{ old('profesor ')== null? "Seleccione Un profesor " : old('profesor')}}</option>

			@foreach ($lista_profesores as $profesor)
			<option value="{{$profesor->id}}">{{ $profesor->nombre}}</option>
					@endforeach
			</select>
		</div>
             <div class="entrar">
								<button type="submit" class="btn btn-primary btn-block btn-lg" onclick="return confirm('Esta SEGURO que desea Guardar esta relacion?')" >
									Registrar
								</button>
							</div>

</form>
</div>
@endsection