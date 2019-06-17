@extends('layouts.layout')

@section('content')
<div class="row">
  <section class="content">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">
        <div class="panel-body">
          <div class="pull-left"><h3>Lista Usuarios</h3></div>
          <div class="pull-right">
            <div class="btn-group">
              <a href="{{ route('register') }}" class="btn btn-info">  Añadir Usuario</a>
            </div>
          </div>
          <div class="table-container">
            <table id="mytable" class="table table-bordred table-striped">
             <thead>
               <th>nombre</th>
               <th>email</th>
               <th>estado</th>
               <th>Roll</th>
               <th>editar</th>
               <th>Eliminar</th>
             </thead>
             <tbody>
              @if($Usuarios->count())  
              @foreach($Usuarios as $Usuario)  
              <tr>
                <td>{{$Usuario->name}}</td>
                <td>{{$Usuario->email}}</td>
                   
                 @if($Usuario->estado==1 )
                <td>Activo</td>
                 @endif
                 @if($Usuario->estado==0 )
                <td>Inactivo</td>
                 @endif
                
                   @foreach($Roles as $Roll)  
                 @if($Usuario->rolID == $Roll->id)
                <td>{{$Roll->descripcion}}</td>
                 @endif
                  @endforeach
                <td><a class="btn btn-primary btn-xs" href="{{action('userController@edit', $Usuario->id)}}" ><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td>
                  <form action="{{action('userController@destroy', $Usuario->id)}}" method="post">
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