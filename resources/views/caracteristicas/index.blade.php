@extends('Layouts.layout')

@section('content')
@include('layouts.session')
<div class="container p-1 rounded" style="background-color: white ">
 <h2>Lista de Equipos <a href="caracteristicas/create"> <button type="button" style="width: 150px;" class="btn btn-success float-right">Agregar Caracter.</button></a> </h2> 
<table class="table table-dark table-hover">
    <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Equipo</th>
    <th scope="col">Hardware</th>
    <th scope="col">Software</th>
    <th scope="col">Descriptción</th>
    <th scope="col">Acciones</th>
     </tr>
</thead>
<tbody>

 
@foreach ($caracteristicas as $caracteristica)
  <tr>
    <th scope="row">{{$caracteristica->id}}</th>
    <td>{{$caracteristica->equipo}}</td>
    <td>{{$caracteristica->hardware}}</td>
    <td>{{$caracteristica->software}}</td>
    <td>{{$caracteristica->description}}</td>
   


    {{-- <td> {{ $caracteristica->updated_at->format('d-m-y')}}</td> --}}


    <td class="d-flex flex-row bd-highlight mb-3">
      
     


      
      <a href="{{route('caracteristicas.show',$caracteristica->id)}}" >
        <button class="btn btn-secondary">
          Ver
        </button>
      </a>



      <a href="{{route('caracteristicas.edit',$caracteristica->id)}}">
        <button class="btn btn-primary ml-2">
          Actualizar
        </button>
        </a>

        
        <form action="{{route('caracteristicas.destroy', $caracteristica->id)}}" method="post">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger ml-2">Eliminar</button>
        </form>
  

    </td>
    </tr>
     @endforeach
     </tbody>
    </table>
    {{-- {{ $caracteristica->links}} --}}
 </div>
 {{-- <div class="container">
  {{ $equipos->links()  }}

</div> --}}

@endsection

