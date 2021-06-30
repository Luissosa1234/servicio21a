@extends('Layouts.layout')






@section('content')
<div class="container">
    <div class="container-fluid text-center">
        <h1>Historicos</h1>
        @include('layouts.session')
    </div>

{{-- vista para validar errores con el include --}}
{{-- @include('layouts/error')

    <form action="{{route("usuarios.store")}}" method="post">
        @csrf --}}

    <div class="row">
    <div class="col-md-6">
      <label for="equipo" class="form-label">equipo</label>
      <input type="text" class="form-control" id="equipo" name="equipo" readonly
      value="{{$historicos->equipo}}">
    </div>
    <div class="col-md-6">
      <label for="ctrabajador" class="form-label">Codigo Trabajador</label>
      <input type="text" class="form-control" id="ctrabajador" name="ctrabajador" readonly
      value="{{$historicos->ctrabajador}}">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
      <label for="fentrega" class="form-label">Fecha Eetrega</label>
      <input type="text" class="form-control" id="fentrega" placeholder="dell" name="fentrega" readonly
      value="{{$historicos->fentrega}}">
    </div>
  </div>
  <div class="row">
    <div class="col-md-6">
      <label for="dprestamo" class="form-label">Dia de prestamo</label>
      <input type="text" class="form-control" id="dprestamo" name="dprestamo" readonly
      value="{{ $historicos->created_at->format('d-m-y')}}">
    </div>
    <div class="col-md-6">
      <label for="status" class="form-label">Estatus</label>
      <input type="text" class="form-control" id="status" placeholder="32132134" name="status" readonly
      value="{{$historicos->status}}">
    </div>
</div>
<div class="row" >
    <div class="col-12 " rows="3">
      <label for="description" class="form-label">Descripción</label>
      <textarea class="form-control" id="description" rows="3" name="dprestamo" readonly 
      >{{$historicos->dprestamo}}</textarea>
    </div>
    
</div>

    
        
        <div class="container-fluid text-center">
            <a href="{{route('historico.index')}}">
                <button  class="btn btn-outline-danger btn-lg justify-content-end mt-5">Regresar</button>
              </a>
     
        </div>
       
   


</div>
@endsection
