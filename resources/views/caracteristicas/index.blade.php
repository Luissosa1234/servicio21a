@extends('Layouts.layout')

@section('content')
<div class="container p-3 rounded" style="background-color: white ">
 <h2>Lista de Equipos <a href="equipos/create"> <button type="button" style="width: 150px;" class="btn btn-outline-success float-right">Agregar caracteristica</button></a> </h2> 
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
    <td>{{$caracteristica->Equipo}}</td>
    <td>{{$caracteristica->hardware}} $</td>
    <td>{{$caracteristica->software}}</td>
    <td>{{$caracteristica->description}}</td>
   


    {{-- <td> {{ $caracteristica->updated_at->format('d-m-y')}}</td> --}}


    <td class="row align-items-start p-1">
      
     


      
      <a href="#" >
        <button class="btn btn-outline-secondary">
          Ver
        </button>
      </a>



      <a href="#}">
        <button class="btn btn-outline-primary ml-2">
          Actualizar
        </button>
        </a>

        
        <form action="#" method="post">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-outline-danger ml-2">Eliminar</button>
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

