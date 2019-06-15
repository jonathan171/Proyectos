@extends('principal')
@section('contenido')
    <!-- <h1>Añadir Proyecto - Paso 2</h1>
    <hr> -->
    @if(isset($proyecto->proyectImg))
    Product Image:
    <a href="../projects/{{$proyecto->proyectImg}}">{{$proyecto->proyectImg}}
    <!-- <img alt="Proyecto Imagen" width="100px" src="../projects/{{$proyecto->proyectImg}}"/> -->
    </a>
    @endif
    <form action="/contenido/create-step2" method="post" enctype="multipart/form-data" class="ubication">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Palabras clave</label>
            <input type="text" value="{{{ $proyecto['palabrasclave'] or '' }}}" class="form-control" id="taskTitle"  name="palabrasclave">
        </div>
        <div class="form-group">
            <label for="title">Keywords</label>
            <input type="text" value="{{{ $proyecto['keywords'] or '' }}}" class="form-control" id="taskTitle"  name="keywords">
        </div>
        <div class="form-group">
            <label for="title">Patrocinador</label>
            <input type="text" value="{{{ $proyecto['patrocinador'] or '' }}}" class="form-control" id="taskTitle"  name="patrocinador">
        </div>
        <h3>Subir Documento del Proyecto</h3><br/><br/>

        <div class="form-group">
            <input type="file" {{ (!empty($proyecto->proyectImg)) ? "disabled" : ''}} class="form-control-file" name="proyectimg" id="proyectimg" aria-describedby="fileHelp">
            <small id="fileHelp" class="form-text text-muted">Por favor archivo valido de imagen. Tamaño de imagen no mayor a 2MB.</small>
        </div>
        <button type="submit" class="btn btn-primary">Paso 3 - Revision Detalles del proyecto</button>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </form><br/>
    @if(isset($proyecto->proyectImg))
    <form action="/proyectos/remove-image" method="post">
        {{ csrf_field() }}
    <button type="submit" class="btn btn-danger">Quitar Image</button>
    </form>
    @endif
@endsection
