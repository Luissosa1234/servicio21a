@extends('Layouts.layout')

@section('content')
@include('layouts.session')
<div class="container p-1 rounded" style="background-color: white ">
 <h2>Historico <a href="{{route('historico.create')}}"> <button type="button" style="width: 150px;" class="btn btn-success float-right">Agregar historico</button></a> </h2> 
<table class="table table-dark table-hover">
    <thead>
  <tr>
    <th scope="col">id</th>
    <th scope="col">Equipo</th>
    <th scope="col">Codigo Trabajador</th>
    <th scope="col">Fecha Asignacion</th>
    <th scope="col">Fecha Entrega</th>
    <th scope="col">Estatus</th>
    <th scope="col">Descripción Prestamo</th>
    <th scope="col">Acciones</th>
     </tr>

  
</thead>
<tbody>
@foreach ($historicos as $historico)
  <tr>
    <th scope="row">{{$historico->id}}</th>
    <td>{{$historico->equipo}}</td>
    <td>{{$historico->ctrabajador}} $</td>
    <td> {{ $historico->created_at->format('d-m-y')}}</td>
    <td>{{$historico->fentrega}}</td>
    <td>{{$historico->status}}</td>
    <td>{{$historico->dprestamo}}</td>
 


    {{-- <td> {{ $historico->updated_at->format('d-m-y')}}</td> --}}


    <td class="d-flex flex-row bd-highlight mb-3">
      
     
      
      <a href="{{route('historico.show',$historico->id)}}" >
        <button class="btn btn-secondary">
          Ver
        </button>
      </a>



      <a href="{{route('historico.edit',$historico->id)}}">
        <button class="btn btn-primary ml-2">
          Actualizar
        </button>
        </a>

        
        <form action="{{route('historico.destroy', $historico ->id)}}" method="post">
          @method('DELETE')
          @csrf
          <button type="submit" class="btn btn-danger ml-2">Eliminar</button>
        </form>
  

    </td>
    </tr>
     @endforeach
     </tbody>
    </table>
    {{-- {{ $historico->links}} --}}
 </div>
 {{-- <div class="container">
  {{ $equipos->links()  }}

</div> --}}

@endsection

