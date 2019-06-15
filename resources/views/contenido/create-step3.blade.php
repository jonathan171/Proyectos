@extends('principal')
@section('contenido')
    <!-- <h1>Añadir nuevo Proyecto - Paso 3</h1>
    <hr> -->
    <!-- <h3>Revision Detalles Proyecto</h3> -->
    <form action="/contenido/store" method="post" class="ubication" >
        {{ csrf_field() }}
        <table class="table">
            <tr>
                <td>Titulo Proyecto:</td>
                <td><strong>{{$proyecto->titulo}}</strong></td>
            </tr>
            <tr>
                <td>Autor:</td>
                <td><strong>{{$proyecto->autor}}</strong></td>
            </tr>

            <tr>
                <td>Identificacion:</td>
                <td><strong>{{$proyecto->identificacion}}</strong></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><strong>{{$proyecto->email ? 'Yes' : 'No'}}</strong></td>
            </tr>
            <tr>
                <td>Director:</td>
                <td><strong>{{$proyecto->director}}</strong></td>
            </tr>



            <tr>
                <td>Evaluador:</td>
                <td><strong>{{$proyecto->evaluador}}</strong></td>
            </tr>

            <tr>
                <td>Fecha:</td>
                <td><strong>{{$proyecto->fecha}}</strong></td>
            </tr>

            <tr>
                <td>Resumen:</td>
                <td><strong>{{$proyecto->resumen}}</strong></td>
            </tr>
            <tr>
                <td>Abstract:</td>
                <td><strong>{{$proyecto->abstract}}</strong></td>
            </tr>
            <tr>
                <td>Palabras Clave:</td>
                <td><strong>{{$proyecto->palabrasclave}}</strong></td>
            </tr>
            <tr>
                <td>Keywords:</td>
                <td><strong>{{$proyecto->keywords}}</strong></td>
            </tr>
            <tr>
                <td>Patrcinador:</td>
                <td><strong>{{$proyecto->patrocinador}}</strong></td>
            </tr>
            <tr>
                <td>Imagen Proyecto:</td>
                <td><strong>
                <a href="../projects/{{$proyecto->proyectImg}}">{{$proyecto->proyectImg}}
                <!-- <img alt="Proyecto Imagen" width="100px" src="../projects/{{$proyecto->proyectImg}}"/></strong></td> -->
                </a>
            </tr>
        </table>
        <a type="button" href="/contenido/create-step1" class="btn btn-warning">Regresar a Paso 1</a>
        <a type="button" href="/contenido/create-step2" class="btn btn-warning">Regresar a Paso 2</a>
        <button type="submit" class="btn btn-primary">Registrar Proyecto</button>
    </form>
@endsection
