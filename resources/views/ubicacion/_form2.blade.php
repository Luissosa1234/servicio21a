@csrf

<div class="row">
  <div class="col-md-6">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" 
    value="{{$ubicaciones->nombre}}">
  </div>
 
  <div class="col-md-5">
    <label for="edificio" class="form-label">Edificio</label>
    <input type="text" class="form-control" id="edificio" name="edificio" 
    value="{{$ubicaciones->edificio}}">
  </div>
</div>


<div class="row">
  <div class="col-md-1">
    <label for="letra" class="form-label">Letra</label>
    <input type="text" class="form-control" id="letra" name="letra" 
    value="{{$ubicaciones->letra}}">
  </div>
  <div class="col-md-5">
    <label for="latitud" class="form-label">Latitud</label>
    <input type="text" class="form-control" id="latitud" name="latitud" 
    value="{{$ubicaciones->latitud}}">
  </div>
    <div class="col-md-5">
      <label for="longitud" class="form-label">Longitud</label>
      <input type="text" class="form-control" id="longitud" name="longitud" 
      value="{{$ubicaciones->longitud}}">
    </div>
   

</div>

<div class="row">
  
  <div class="col-11 " rows="3">
    <label for="description" class="form-label">Descripción</label>
    <textarea class="form-control" id="description" rows="3" name="description"
   >{{old('description',$ubicaciones->description)}}</textarea>
  </div>
</div>


<div class="row">
  
  <div class="col-12">
    <button style="width: 150px" type="submit" class="btn btn-primary btn-lg mt-5">Enviar</button>
  </div>

</div>



