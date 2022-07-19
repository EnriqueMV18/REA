@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>editar registros socios</h1>
@stop

@section('content')
    <p>
    
    <form action="{{ url('/socio'.$socio->id ) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('socio.form',['modo'=>'Editar']);
    </form>

    </p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop 


