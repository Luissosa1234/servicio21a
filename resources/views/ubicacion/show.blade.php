@extends('Layouts.layout')






@section('content')
<div class="container">
    <div class="container-fluid text-center">
        <h1>Ubicacion</h1>
        @include('layouts.session')
    </div>

{{-- vista para validar errores con el include --}}
{{-- @include('layouts/error')

    <form action="{{route("usuarios.store")}}" method="post">
        @csrf --}}
        @csrf

<div class="row">
  <div class="col-md-6">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" readonly
    value="{{$ubicaciones->nombre}}">
  </div>
 
  <div class="col-md-5">
    <label for="edificio" class="form-label">Edificio</label>
    <input type="text" class="form-control" id="edificio" name="edificio" readonly
    value="{{$ubicaciones->edificio}}">
  </div>
</div>


<div class="row">
  <div class="col-md-1">
    <label for="letra" class="form-label">Letra</label>
    <input type="text" class="form-control" id="letra" name="letra" readonly
    value="{{$ubicaciones->letra}}">
  </div>
  <div class="col-md-5">
    <label for="latitud" class="form-label">Latitud</label>
    <input type="text" class="form-control" id="latitud" name="latitud" readonly
    value="{{$ubicaciones->latitud}}">
  </div>
    <div class="col-md-5">
      <label for="longitud" class="form-label">Longitud</label>
      <input type="text" class="form-control" id="longitud" name="longitud" readonly
      value="{{$ubicaciones->longitud}}">
    </div>
   

</div>

<div class="row">
  
  <div class="col-11 " rows="3">
    <label for="description" class="form-label">Descripción</label>
    <textarea class="form-control" id="description" rows="3" name="description" readonly
   >{{old('description',$ubicaciones->description)}}</textarea>
  </div>
</div>

        
        
            <a href="{{route('ubicacion.index')}}">
                <button  class="btn btn-danger btn-lg justify-content-end mt-5">Regresar</button>
              </a>
     
      
       
   


</div>
@endsection
