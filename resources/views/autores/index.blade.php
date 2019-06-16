@extends('layouts.layout')

@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Autores</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('autor.create') }}" class="btn btn-info" >Añadir Autor</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>cedula</th>
               <th>nombre</th>
               <th>correo</th>
               <th>Editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($autores->count())  
              @foreach($autores as $autor)  
              <tr>
                <td>{{$autor->cedula}}</td>
                <td>{{$autor->nombre}}</td>
                <td>{{$autor->email}}</td>
               
                <td><a class="btn btn-primary btn-xs" href="{{action('autorController@edit', $autor->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('autorController@destroy', $autor->id)}}" method="post">
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
      {{ $autores->links() }}
    </div>
  </div>
</section>
 
@endsection