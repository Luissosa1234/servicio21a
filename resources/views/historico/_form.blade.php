@csrf

<div class="row">
  <div class="col-md-6">
    <label for="equipo" class="form-label">equipo</label>
    <input type="text" class="form-control" id="equipo" name="equipo" 
    value="{{$historicos->equipo}}">
  </div>
  <div class="col-md-6">
    <label for="ctrabajador" class="form-label">Codigo Trabajador</label>
    <input type="text" class="form-control" id="ctrabajador" name="ctrabajador" 
    value="{{$historicos->ctrabajador}}">
  </div>
</div>
<div class="row">
  <div class="col-md-6">
    <label for="fentrega" class="form-label">Fecha Eetrega</label>
    <input type="text" class="form-control" id="fentrega"  name="fentrega" 
    value="{{$historicos->fentrega}}">
  </div>
  <div class="col-md-6">
    <label for="status">Estatus</label>
    <select id="status" class="form-control" name="status"
    value="{{old('status',$historicos->status)}}"
    >
        <option value="Activo">Activo</option>
        <option value="Inactivo">Inactivo</option>
      </select>
  </div>

</div>
<div class="row">
  <div class="col-12 " rows="3">
    <label for="dprestamo" class="form-label">Descripción</label>
    <textarea class="form-control" id="dprestamo" rows="3" name="dprestamo"
   >{{old('dprestamo',$historicos->dprestamo)}}</textarea>
  </div>

</div>

 
<div class="row">
    <div class="col-12">
      <button style="width: 150px" type="submit" class="btn btn-primary btn-lg mt-5">Enviar</button>
    </div>

</div>
