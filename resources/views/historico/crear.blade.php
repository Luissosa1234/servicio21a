@extends('Layouts.layout')



@section('content')

<div class="container ">

    <div class="container-fluid text-center">
        <h1>AGREGAR PRESTAMO</h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('Layouts/error')

          <form action="{{route("historico.store")}}" method="post">
         @include('historico._form')
           </form>

           <a href="{{route("historico.index")}}">
            <button  class="btn btn-danger btn-lg justify-content-end mt-5" style="width: 150px">Regresar</button>
          </a>

</div>
@endsection