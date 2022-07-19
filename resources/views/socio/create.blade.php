@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
    <p>
    <form action="{{ url('/socio')}}" method="post" enctype="multipart/form-data">
    @csrf 
    @include('socio.form',['modo'=>'Crear']);
    </form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

