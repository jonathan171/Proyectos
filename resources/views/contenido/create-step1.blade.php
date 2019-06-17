@extends('layouts.layout')
@section('content')

    <!-- <h1>Añadir un nuevo Proyecto - Paso 1</h1> -->
    <!-- <hr> -->
    <form action="/contenido/create-step1" method="post" class="ubication" ccept-charset="UTF-8" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Titulo del Proyecto</label>
            <input type="text" value="{{ $proyecto['titulo'] or '' }}" class="form-control" id="titulo"  name="titulo">
        </div>

      



     

        <div class="form-group">
            <label for="title">Fecha de Publicacion</label>
            <input type="date" value="{{ $proyecto['fecha'] or '' }}" class="form-control" id="fecha"  name="fecha">
        </div>

    
        <!-- </div> -->
        <div class="form-group">
            <label for="resumen">Resumen</label>
            <textarea type="text"  class="form-control" id="taskDescription" name="resumen">{{ $proyecto['resumen'] or '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="abstract">Abstract</label>
            <textarea type="text"  class="form-control" id="taskDescription" name="abstract">{{ $proyecto['abstract'] or '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="abstract">archivo</label>
            <input type="file" name="proyectimg" class="form-control"> 
        </div>
         <div class="col-xs-6 col-sm-6 col-md-6">
            <label for="abstract">Programa</label>
                                    <div class="form-group">
                                        <select name="programa" class="selectpicker" id="programa" required="true">
                                      <option value="Sistemas">Sistemas</option>
                                </select>
                            
                                    </div>
                                </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <label for="abstract">tipo Repositorio</label>
                                    <div class="form-group">
                                        <select name="tipoRepositorio" class="selectpicker" id="tipoRepositorio" required="true">
                                       @foreach ($tipos as $tipo)
                                    <option value="{{$tipo->id}}" {{old('estado_id')== $tipo->id ? 'selected': ''}}>{{ $tipo->descripcion}}</option>
                                    @endforeach
                                </select>
                            
                                    </div>
                                </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
