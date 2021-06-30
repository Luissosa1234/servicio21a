@extends('Layouts.layout')






@section('content')
<div class="container">
    <div class="container-fluid text-center">
        <h1>EQUIPO</h1>
        @include('layouts.session')
    </div>

{{-- vista para validar errores con el include --}}
{{-- @include('layouts/error')

    <form action="{{route("usuarios.store")}}" method="post">
        @csrf --}}
        
    <div class="row">
    <div class="col-md-6">
      <label for="equipo" class="form-label">Equipo</label>
      <input type="text" class="form-control" id="equipo" name="equipo" readonly
      value="{{$equipos->equipo}}">
    </div>
    <div class="col-md-6">
      <label for="modelo" class="form-label">Modelo</label>
      <input type="text" class="form-control" id="modelo" name="modelo" readonly
      value="{{$equipos->modelo}}">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
      <label for="marca" class="form-label">Marca</label>
      <input type="text" class="form-control" id="marca" placeholder="dell" name="marca" readonly
      value="{{$equipos->marca}}">
    </div>
    <div class="col-md-6">
      <label for="nserie" class="form-label"># Serie</label>
      <input type="text" class="form-control" id="nserie" placeholder="32132134" name="nserie" readonly
      value="{{$equipos->nserie}}">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
      <label for="cudg" class="form-label">Codigo UdG</label>
      <input type="text" class="form-control" id="cudg" name="cudg" readonly
      value="{{$equipos->cudg}}">
    </div>
    <div class="col-md-6">
      <label for="cunitario" class="form-label">Costo Unitario</label>
      <input type="text" class="form-control" id="cunitario" name="cunitario" readonly
      value="{{$equipos->cunitario}}">
    </div>
</div>
<div class="row" >
    <div class="col-12 " rows="3">
      <label for="description" class="form-label">Descripción</label>
      <textarea class="form-control" id="description" rows="3" name="description" readonly 
      >{{$equipos->description}}</textarea>
    </div>
    
</div>

<div class="row" >
    <div class="col-md-6">
        <label for="ubicacion" class="form-label">Ubicación</label>
        <input type="text" class="form-control" id="ubicacion" name="ubicacion" readonly
        value="{{$equipos->ubicacion}}">
    </div>
    
    <div class="col-md-6">
        <label for="ubicacion" class="form-label">Estatus</label>
        <input type="text" class="form-control" id="ubicacion" name="ubicacion" readonly
        value="{{$equipos->status}}">
    </div>


   
    </div>
    
        
        <div class="container-fluid text-center">
            <a href="{{route('equipos.index')}}">
                <button  class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
              </a>
     
        </div>
       
   


</div>
@endsection
