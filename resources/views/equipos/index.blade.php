@extends('Layouts.layout')

@section('content')
<div class="container p-3 rounded" style="background-color: white ">
 <h2>Lista de Equipos <a href="equipos/create"> <button type="button" style="width: 150px;" class="btn btn-outline-success float-right">Agregar equipo</button></a> </h2> 
<table class="table table-dark table-hover">
    <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Equipo</th>
    <th scope="col">Modelo</th>
    <th scope="col">Marca</th>
    <th scope="col">#serie</th>
    <th scope="col">C. UdG</th>
    <th scope="col">Descri.</th>
    <th scope="col">Fecha Rec.</th>
    <th scope="col">Status</th>
    <th scope="col">Ubicación</th>
    <th scope="col">Costo Uni.</th>
    <th scope="col">Acciones</th>
     </tr>
</thead>
<tbody>
@foreach ($equipos as $equipo)
  <tr>
    <th scope="row">{{$equipo->id}}</th>
    <td>{{$equipo->equipo}}</td>
    <td>{{$equipo->modelo}} $</td>
    <td>{{$equipo->marca}}</td>
    <td>{{$equipo->nserie}}</td>
    <td>{{$equipo->cudg}}</td>
    <td>{{$equipo->description}}</td>
    <td> {{ $equipo->created_at->format('d-m-y')}}</td>
    <td>{{$equipo->status}}</td>
    <td>{{$equipo->ubicacion}}</td>
    <td>{{$equipo->cunitario}}</td>


    {{-- <td> {{ $equipo->updated_at->format('d-m-y')}}</td> --}}


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
    {{-- {{ $equipo->links}} --}}
 </div>
 {{-- <div class="container">
  {{ $equipos->links()  }}

</div> --}}

@endsection

