@extends('Layouts.layout')





@section('content')

   <div class="container">

    <div class="container-fluid text-center ">
      
       
       <h1>ACTUALIZAR PRESTAMO: {{ $historicos->equipo}}  </h1>
        @include('layouts.session')
    </div>

             {{-- vista para validar errores con el include --}}
             @include('layouts/error')

             <form action="{{route("historico.update",$historicos->id)}}" method="post">
                @method('PUT')
            
              @include('historico._form')
          

               
           </form>
           <a href="{{route("historico.index")}}">
            <button  class="btn btn-danger btn-lg justify-content-end mt-5" style="width: 150px">Regresar</button>
          </a>
     
        </div>
      
</div>
@endsection
