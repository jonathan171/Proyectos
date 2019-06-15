@extends('principal')
@section('contenido')

    <!-- <h1>Añadir un nuevo Proyecto - Paso 1</h1> -->
    <!-- <hr> -->
    <form action="/contenido/create-step1" method="post" class="ubication">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Titulo del Proyecto</label>
            <input type="text" value="{{ $proyecto['titulo'] or '' }}" class="form-control" id="titulo"  name="titulo">
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <select class="form-control" name="autor">
                <option {{{ (isset($proyecto->autor) && $proyecto->autor == 'Patarroyo') ? "selected=\"selected\"" : "" }}}>Patarroyo</option>
                <option {{{ (isset($proyecto->autor) && $proyecto->autor == 'Gates') ? "selected=\"selected\"" : "" }}}>Gates</option>
                <option {{{ (isset($proyecto->autor) && $proyecto->autor == 'Albert') ? "selected=\"selected\"" : "" }}}>Albert</option>
                <option {{{ (isset($proyecto->autor) && $proyecto->autor == 'Uribe') ? "selected=\"selected\"" : "" }}}>Uribe</option>
            </select>
        </div>



        <div class="form-group">
            <label for="identificacion">Identificacion</label>
            <input type="text"  value="{{ $proyecto['identificacion'] or '' }}" class="form-control" id="proyectoIdentificacion" name="identificacion"/>
        </div>
        <div class="form-group">
            <label for="description">Email</label><br/>
            <label class="radio-inline"><input type="radio" name="email" value="1" {{{ (isset($proyecto->email) && $proyecto->email == '1') ? "checked" : "" }}}> Yes</label>
            <label class="radio-inline"><input type="radio" name="email" value="0" {{{ (isset($proyecto->email) && $proyecto->email == '0') ? "checked" : "" }}}> No</label>
        </div>
      



     

        <div class="form-group">
            <label for="title">Fecha de Publicacion</label>
            <input type="date" value="{{ $proyecto['fecha'] or '' }}" class="form-control" id="fecha"  name="fecha">
        </div>

        <!-- <div class="row">
        <div class="col-lg-4 col-mg-4 col-sm-4 col-xs-4">
        <div class="form-group">
            <label for="ano">Año</label>
            <select class="form-control" name="ano">
                <option {{{ (isset($proyecto->ano) && $proyecto->ano == '2015') ? "selected=\"selected\"" : "" }}}>2015</option>
                <option {{{ (isset($proyecto->ano) && $proyecto->ano == '2016') ? "selected=\"selected\"" : "" }}}>2016</option>
                <option {{{ (isset($proyecto->ano) && $proyecto->ano == '2017') ? "selected=\"selected\"" : "" }}}>2017</option>
                <option {{{ (isset($proyecto->ano) && $proyecto->ano == '2018') ? "selected=\"selected\"" : "" }}}>2018</option>
            </select>
        </div>
        </div>

        <div class="col-lg-4 col-mg-4 col-sm-4 col-xs-4">
        <div class="form-group">
            <label for="mes">Mes</label>
            <select class="form-control" name="mes">
                <option {{{ (isset($proyecto->mes) && $proyecto->mes == '08') ? "selected=\"selected\"" : "" }}}>Agosto</option>
                <option {{{ (isset($proyecto->mes) && $proyecto->mes == '09') ? "selected=\"selected\"" : "" }}}>Septiembre</option>
                <option {{{ (isset($proyecto->mes) && $proyecto->mes == '10') ? "selected=\"selected\"" : "" }}}>Octubre</option>
                <option {{{ (isset($proyecto->mes) && $proyecto->mes == '11') ? "selected=\"selected\"" : "" }}}>Noviembre</option>
            </select>
        </div>
        </div>

        <div class="col-lg-4 col-mg-4 col-sm-4 col-xs-4">
        <div class="form-group">
            <label for="dia">Dia</label>
            <select class="form-control" name="dia">
                <option {{{ (isset($proyecto->dia) && $proyecto->dia == '28') ? "selected=\"selected\"" : "" }}}>28</option>
                <option {{{ (isset($proyecto->dia) && $proyecto->dia == '29') ? "selected=\"selected\"" : "" }}}>29</option>
                <option {{{ (isset($proyecto->dia) && $proyecto->dia == '30') ? "selected=\"selected\"" : "" }}}>30</option>
                <option {{{ (isset($proyecto->dia) && $proyecto->dia == '31') ? "selected=\"selected\"" : "" }}}>31</option>
            </select>
        </div>
        </div> -->

        <!-- </div> -->
        <div class="form-group">
            <label for="resumen">Resumen</label>
            <textarea type="text"  class="form-control" id="taskDescription" name="resumen">{{ $proyecto['resumen'] or '' }}</textarea>
        </div>
        <div class="form-group">
            <label for="abstract">Abstract</label>
            <textarea type="text"  class="form-control" id="taskDescription" name="abstract">{{ $proyecto['abstract'] or '' }}</textarea>
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
        <button type="submit" class="btn btn-primary">Paso 2</button>
    </form>
@endsection
