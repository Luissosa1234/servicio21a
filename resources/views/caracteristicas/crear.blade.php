@extends('Layouts.layout')



@section('content')

<div class="container ">

    <div class="container-fluid text-center">
        <h1>AGREGAR CARACTERISTICAS</h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('Layouts/error')

          <form action="{{route("caracteristicas.store")}}" method="post">
         @include('caracteristicas._form')
           </form>

           <a href="{{route("caracteristicas.index")}}">
            <button  class="btn btn-danger btn-lg justify-content-end mt-5" style="width: 150px">Regresar</button>
          </a>

</div>
@endsection