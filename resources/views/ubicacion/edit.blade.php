@extends('Layouts.layout')





@section('content')

   <div class="container">

    <div class="container-fluid text-center ">
      
       
       <h1>ACTUALIZAR UBICACIÓN: {{ $ubicaciones->equipo}}  </h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('layouts/error')

             <form action="{{route("ubicacion.update",$ubicaciones->id)}}" method="post">
                @method('PUT')
            
              @include('ubicacion._form2')
          

               
           </form>
           <a href="{{route("ubicacion.index")}}">
            <button  class="btn btn-danger btn-lg justify-content-end mt-5" style="width: 150px">Regresar</button>
          </a>
     
        </div>
      
</div>
@endsection
