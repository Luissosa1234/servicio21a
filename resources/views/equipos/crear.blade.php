@extends('Layouts.layout')

@section('content')

{{-- vista para validar errores con el include --}}
{{-- @include('dashboard/partials.validation-error') --}}

<form action="#" method="post">
    @csrf

    <div class="form-group">
        <label for="title">Titulo</label>
        <input class="form-control" type="text" name="title" id="title">

        @error('title')
        <small class="text-danger">{{ $message }}</small>    
        @enderror


    </div>
    <div class="form-group">
        <label for="url_clean">Url limpia</label>
        <input class="form-control" type="text" name="url_clean" id="url_clean">
    </div>

    
    <div class="form-group">
        <label for="content" class="form-label">Contenido</label>
        <textarea class="form-control" id="content" rows="3" name="content"></textarea>
    </div>



    <input type="submit" value="Enviar">
</form>


@endsection

