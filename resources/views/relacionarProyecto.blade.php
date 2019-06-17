@extends('layouts.layout')
@section('content')

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
	<label for="exampleInputEmail1">Autor   </label>
		<select multiple class="selectpicker" name="autor.autorId" required="true" id="my-select">

			<option value="{{ old('autor ')== null? '' : old('autor ')}}" >{{ old('autor ')== null? "Seleccione Un Autor" : old('autor')}}</option>

			@foreach ($lista_autores as $autor)
			<option value="{{$autor->id}}">{{ $autor->nombre}}</option>
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
<script >
	$('#my-select').multiSelect();
</script>
@endsection