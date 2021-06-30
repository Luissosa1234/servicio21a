@csrf

    <div class="row">
    <div class="col-md-6">
      <label for="equipo" class="form-label">Equipo</label>
      <input type="text" class="form-control" id="equipo" name="equipo"
      value="{{old('equipo',$equipos->equipo)}}">
    </div>
    <div class="col-md-6">
      <label for="modelo" class="form-label">Modelo</label>
      <input type="text" class="form-control" id="modelo"name="modelo"
      value="{{old('modelo',$equipos->modelo)}}">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
      <label for="marca" class="form-label">Marca</label>
      <input type="text" class="form-control" id="marca" placeholder="dell" name="marca"
      value="{{old('marca',$equipos->marca)}}">
    </div>
    <div class="col-md-6">
      <label for="nserie" class="form-label"># Serie</label>
      <input type="text" class="form-control" id="nserie" placeholder="32132134" name="nserie"
      value="{{old('nserie',$equipos->nserie)}}">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
      <label for="cudg" class="form-label">Codigo UdG</label>
      <input type="text" class="form-control" id="cudg" name="cudg"
      value="{{old('cudg',$equipos->cudg)}}">
    </div>
    <div class="col-md-6">
      <label for="cunitario" class="form-label">Costo Unitario</label>
      <input type="text" class="form-control" id="cunitario" name="cunitario"
      value="{{old('cunitario',$equipos->cunitario)}}">
    </div>
</div>
<div class="row" >
    <div class="col-12 " rows="3">
      <label for="description" class="form-label">Descripción</label>
      <textarea class="form-control" id="description" rows="3" name="description"
     >{{old('description',$equipos->description)}}</textarea>
    </div>
    
</div>

<div class="row" >
    <div class="col-md-6">
        <label for="ubicacion" class="form-label">Ubicación</label>
        <input type="text" class="form-control" id="ubicacion" name="ubicacion"
        value="{{old('ubicacion',$equipos->ubicacion)}}">
    </div>
    
   <div class="col-md-6">
    <label for="status">Estatus</label>
    <select id="status" class="form-control" name="status"
    value="{{old('status',$equipos->status)}}"
    >
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
        <option value="Baja">Baja</option>
      </select>
  </div>
</div>
 
<div class="row">
    <div class="col-12">
      <button style="width: 150px" type="submit" class="btn btn-primary btn-lg mt-5">Enviar</button>
    </div>

</div>
