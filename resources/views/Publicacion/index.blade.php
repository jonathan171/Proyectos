@extends('layouts.layout')

@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Publicaciones</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('publicacion.create') }}" class="btn btn-info" >Añadir Publicacion</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>fecha Publicacion</th>
               <th>Observacion</th>
               <th>Repositorio</th>
               <th>publicada por</th>
               <th>editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($Publicaciones->count())  
              @foreach($Publicaciones as $Publicacion)  
              <tr>
                <td>{{$Publicacion->fechaPublicacion}}</td>
                <td>{{$Publicacion->observacion}}</td>
                 @foreach($Repositorios as $repositorio)  
                 @if($repositorio->id == $Publicacion->idRepositorio)
                <td>{{$repositorio->titulo}}</td>
                 @endif
                  @endforeach
                   @foreach($Usuarios as $usuario)  
                 @if($usuario->id == $Publicacion->idEstudiante)
                <td>{{$usuario->name}}</td>
                 @endif
                  @endforeach
                <td><a class="btn btn-primary btn-xs" href="{{action('publicacionController@edit', $Publicacion->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('publicacionController@destroy', $Publicacion->id)}}" method="post">
                   {{csrf_field()}}
                   <input name="_method" type="hidden" value="DELETE">
 
                   <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span></button>
                 </td>
               </tr>
               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registros !!</td>
              </tr>
              @endif
            </tbody>
 
          </table>
        </div>
      </div>
   
    </div>
  </div>
</section>
 
@endsection