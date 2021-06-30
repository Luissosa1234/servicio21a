@extends('Layouts.layout')

@section('content')
@include('layouts.session')
<div class="container p-3 rounded" style="background-color: white ">
 <h2>Lista de ubicacioness <a href="ubicacion/crear"> <button type="button" style="width: 150px;" class="btn btn-success float-right">Agregar ubicacion</button></a> </h2> 
<table class="table table-dark table-hover">
    <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Nombre</th>
    <th scope="col">Letra</th>
    <th scope="col">Edificio</th>
    <th scope="col">Descripción</th>
    <th scope="col">Latitud</th>
    <th scope="col">Longitud</th>
    <th scope="col">Acciones</th>

 
     </tr>
</thead>
<tbody>
@foreach ($ubicaciones as $ubicacion)
  <tr>
    <th scope="row">{{$ubicacion->id}}</th>
    <td>{{$ubicacion->nombre}}</td>
    <td>{{$ubicacion->letra}} $</td>
    <td>{{$ubicacion->edificio}}</td>
    <td>{{$ubicacion->description}}</td>
    <td>{{$ubicacion->latitud}}</td>
    <td>{{$ubicacion->longitud}}</td>
   


    {{-- <td> {{ $ubicacion->updated_at->format('d-m-y')}}</td> --}}


    <td class="d-flex flex-row bd-highlight mb-3">
      
     


      
      <a href="{{route('ubicacion.show',$ubicaciones->id)}}" >
        <button class="btn btn-secondary">
          Ver
        </button>
      </a>



      <a href="{{route('ubicacion.destroy', $ubicaciones ->id)}}">
        <button class="btn btn-primary ml-2">
          Actualizar
        </button>
        </a>

        <form action="{{route('ubicacion.destroy', $ubicaciones ->id)}}" method="post">

          @method('DELETE')
          @csrf
         
          <button type="submit" class="btn btn-danger ml-2">Eliminar</button>
        </form>

    </td>
    </tr>
     @endforeach
     </tbody>
    </table>
    {{-- {{ $ubicacion->links}} --}}
 </div>
 {{-- <div class="container">
  {{ $ubicacion->links()  }}

</div> --}}

@endsection

