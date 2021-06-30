@extends('Layouts.layout')



@section('content')
@include('layouts.session')
<div class="container p-1 rounded" style="background-color: white ">
 <h2>Lista de Equipos <a href="equipos/create"> <button type="button" style="width: 150px;" class="btn btn-success float-right">Agregar equipo</button></a> </h2> 
<table class="table table-dark table-hover " style="font-size: 11px; margin-left: -80px">
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
    <th scope="col" style="text-align: center">Acciones</th>
     </tr>
</thead>
<tbody>
@foreach ($equipos as $equipo)
  <tr>
    <th scope="row">{{$equipo->id}}</th>
    <td>{{$equipo->equipo}}</td>
    <td>{{$equipo->modelo}}</td>
    <td>{{$equipo->marca}}</td>
    <td>{{$equipo->nserie}}</td>
    <td>{{$equipo->cudg}}</td>
    <td>{{$equipo->description}}</td>
    <td> {{ $equipo->created_at->format('d-m-y')}}</td>
    <td>{{$equipo->status}}</td>
    <td>{{$equipo->ubicacion}}</td>
    <td>{{$equipo->cunitario}}</td>


    {{-- <td> {{ $equipo->updated_at->format('d-m-y')}}</td> --}}


    <td class="d-flex flex-row bd-highlight mb-3">
      
      
        <a href="{{route('equipos.show',$equipo->id)}}" >
          <button class="btn btn-secondary">
            Ver
          </button>
        </a>


      <a href="{{route('equipos.edit',$equipo->id)}}">
        <button class="btn btn-primary ml-2">
          Actualizar
        </button>
        </a>

        <form action="{{route('equipos.destroy', $equipo ->id)}}" method="post">

          @method('DELETE')
          @csrf
         
          <button type="submit" class="btn btn-danger ml-2">Eliminar</button>
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

