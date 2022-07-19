@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1> Dashboard  </h1>
@stop

@section('content')

    <button type="button" class="btn btn-outline-info"><a href="socio">Cliente</a></button>
    &nbsp;
    &nbsp;
    &nbsp; 
    <button type="button" class="btn btn-outline-warning">Pago</button>
    &nbsp;
    &nbsp;
    &nbsp;
    <button type="button" class="btn btn-outline-success">Entrenadores</button>
    &nbsp;
    &nbsp;
    &nbsp;
    <button type="button" class="btn btn-outline-danger">Plan de Entrenamiento</button>
    &nbsp;
    &nbsp;
    &nbsp;
    <button type="button" class="btn btn-outline-primary">Actividades</button>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
    
    