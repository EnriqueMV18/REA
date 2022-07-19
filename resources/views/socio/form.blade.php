@extends('layouts.plantillabase')
@section('contenido')
<h1>{{ $modo }} Socio</h1>


    <form class="form-inline" role="form" action=""></form>
    <div class="form-group float-left" >
    <label for="Nombre" display="flex" >Nombres</label>
    <input type="text" aria-label="default input example" class="form-control" name="Nombre" value="{{ isset($socio->Nombre)?$socio->Nombre:'' }}" id="Nombre">
    <br>
    </div>
&nbsp;
    <div class="form-group float-left">
    <label for="ApellidoPaterno">ApellidoPaterno</label>
    <input type="text"  class="form-control" name="ApellidoPaterno" value="{{ isset($socio->ApellidoPaterno)?$socio->ApellidoPaterno:'' }}" id="ApellidoPaterno">
    <br>
    </div>
    &nbsp;
    <div class="form-group float-left" >
    <label for="ApellidoMaterno">ApellidoMaterno</label>
    <input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($socio->ApellidoMaterno)?$socio->ApellidoMaterno:'' }}" id="ApellidoMaterno">
    <br>
    </div>
    &nbsp;
    <div class="form-group float-left">
    <label for="Sexo" class="form-label">Sexo</label>
    <input type="text" class="form-control" name="Sexo" list="datalistOptions" value="{{ isset($socio->Sexo)?$socio->Sexo:'' }}" id="Sexo">
    <datalist id="datalistOptions">
    <option value="M">
    <option value="F">
    </datalist>
    <br>
    </div>
    &nbsp;
    <div class="form-group float-left">
    <label for="Dni">Dni</label>
    <input type="double"  class="form-control" name="Dni" value="{{ isset($socio->Dni)?$socio->Dni:'' }}" id="Dni">
    <br>
    </div>
&nbsp;
    <div class="form-group float-left">
    <label for="Direccion">Direccion</label>
    <input type="text"  class="form-control" name="Direccion" value="{{ isset($socio->Direccion)?$socio->Direccion:'' }}" id="Direccion">
    <br>
    </div>
    &nbsp;
    <div class="form-group float-left">
    <label for="Telefono">Telefono</label>
    <input type="double" class="form-control" name="Telefono" value="{{ isset($socio->Telefono)?$socio->Telefono:'' }}" id="Telefono">
    <br>
    </div>
    &nbsp;
    <div class="form-group float-left mb-3">
    <label for="Correo" class="form-label">Correo</label>
    <input type="email"  class="form-control" name="Correo" value="{{ isset($socio->Correo)?$socio->Correo:'' }}" id="Correo">
    <br></div>
    &nbsp;
    <div class="form-group float-left">
    <label for="FechaNacimiento">FechaNacimiento</label>
    <input type="date" class="form-control" name="FechaNacimiento" value="{{ isset($socio->FechaNacimiento)?$socio->FechaNacimiento:'' }}" id="FechaNacimiento">
    <br></div>
    &nbsp;
    <div class="form-group float-left">
    <label for="Ocupacion">Ocupacion</label>
    <input type="text" class="form-control" name="Ocupacion" value="{{ isset($socio->Ocupacion)?$socio->Ocupacion:'' }}" id="Ocupacion">
    <br>
    </div>
    &nbsp;
    <div class="form-group float-left">
    <label for="Codigo">Codigo</label>
    <input type="double" class="form-control" name="Codigo" value="{{ isset($socio->Codigo)?$socio->Codigo:'' }}" id="Codigo">
    <br>
    </div>
    &nbsp;
    <div  class="mb-3 form-group float-left">
    <label for="Foto" class="form-label">Foto</label>
    @if(isset($socio->Foto))
    <img class="form-control " type="file" src="{{ asset('storage').'/'.$socio->Foto }}" width="100" alt="">
    @endif
    <input type="file" name="Foto" id="Foto">
    <br></div>
    &nbsp;

    <button type="Submit" class="btn btn-outline-danger float-left" value="{{ $modo }} Datos ">
        CREAR DATOS
    </button>
    <br>
    &nbsp;
    <button type="button" class="btn btn-outline-success float-left">
        <a href="{{ url('socio')}}">CANCELAR</a>
    </button>

    @endsection