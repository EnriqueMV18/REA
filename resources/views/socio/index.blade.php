@extends('adminlte::page')

@section('title', 'Socios')

@section('content_header')
    
    <h1 class="bg-success text-white text-center p-3 mb-2 ">Lista de Socios</h1>
    
@stop

@section('content')
    <p>
    @if(Session::has('mensaje'))
    {{ Session::get('mensaje') }}
    @endif


<div class="contenedor1"></div>
<button type="button" class="btn btn-outline-primary"><a href="{{ url('socio/create')}}">Nuevo Socio</a></button>
&nbsp;
&nbsp;
<button type="button" class="btn btn-outline-danger"><a href="{{ url('socio/boleta')}}">Boleta de Venta</a></button>
</div>



<div class="contenedor2">
    <table id="socios" style="width:100%" class="table table-dark table-striped 
    table-bordered shadow-lg mt-4 table-responsive">
    <thead class="thead-dark bg-dark text-white">
        <tr>
            <th>ID</th>
            <th>Foto</th>
            <th>Codigo</th>
            <th>Nombre</th>
            <th>ApellidoPaterno</th>
            <th>ApellidoMaterno</th>
            <th>Sexo</th>
            <th>Dni</th>
            <th>Direccion</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>FechaNacimiento</th>
            <th>Ocupacion</th>
            <th>Acciones</th>

        </tr>
    </thead>

    <tbody class="table thead-danger">
        @foreach($socios as $socio)
        <tr>
            <td>{{ $socio->id }}</td>

            <td>
                <img src="{{ asset('storage').'/'.$socio->Foto }}" width="100" alt="">
            </td>

            <td>{{ $socio->Codigo }}</td>
            <td>{{ $socio->Nombre }}</td>
            <td>{{ $socio->ApellidoPaterno }}</td>
            <td>{{ $socio->ApellidoMaterno }}</td>
            <td>{{ $socio->Sexo }}</td>
            <td>{{ $socio->Dni }}</td>
            <td>{{ $socio->Direccion }}</td>
            <td>{{ $socio->Telefono }}</td>
            <td>{{ $socio->Correo }}</td>
            <td>{{ $socio->FechaNacimiento }}</td>
            <td>{{ $socio->Ocupacion }}</td>
            <td style="text-align:right"> 
                
            <a class="btn btn-warning" href="{{ url('/socio'.$socio->id.'/edit')}}">Editar</a>
            | 

            <form action="{{ url('/socio/'.$socio->id)}}" method="post">  
            @csrf
            {{ method_field('DELETE')}}
            <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar?')"
            value="Borrar">
            </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>

    
</div>

    </p>
@stop
@section('css')
<link href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css" 
rel="stylesheet" >
@endsection

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function () {
        $('#socios').DataTable({
            "language":{
                "search":"Buscar",
                "lengthMenu": "Mostar _MENU_ registros por pagina",
                "info": "Mostrando página _PAGE_ de _PAGES",
                "paginate":{
                    "previous":"Anterior",
                    "next":"Siguiente",
                    "first":"Primero",
                    "last":"Último"
                }

            }
        });
        });
    </script>
@endsection