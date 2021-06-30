@extends('Layouts.layout')






@section('content')
<div class="container">
    <div class="container-fluid text-center">
        <h1>Caracteristicas</h1>
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
      value="{{$caracteristicas->equipo}}">
    </div>
    <div class="col-md-6">
      <label for="hardware" class="form-label">Hardware</label>
      <input type="text" class="form-control" id="hardware" name="hardware" readonly
      value="{{$caracteristicas->hardware}}">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
      <label for="software" class="form-label">Software</label>
      <input type="text" class="form-control" id="software"  name="software" readonly
      value="{{$caracteristicas->software}}">
    </div>
<div class="row" >
    <div class="col-12 " rows="3">
      <label for="description" class="form-label">Descripción</label>
      <textarea class="form-control" id="description" rows="3" name="description" readonly 
      >{{$caracteristicas->description}}</textarea>
    </div>
</div>
   
    </div>
    
        
        <div class="container-fluid text-center">
            <a href="{{route('caracteristicas.index')}}">
                <button  class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
              </a>
     
        </div>
       
   


</div>
@endsection
