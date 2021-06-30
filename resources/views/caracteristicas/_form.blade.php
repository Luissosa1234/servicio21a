@csrf


    <div class="row">
    <div class="col-md-6">
      <label for="equipo" class="form-label">Equipo</label>
      <input type="text" class="form-control" id="equipo" name="equipo"
      value="{{old('equipo',$caracteristicas->equipo)}}">
    </div>
    <div class="col-md-6">
      <label for="hardware" class="form-label">Hardware</label>
      <input type="text" class="form-control" id="hardware"name="hardware"
      value="{{old('hardware',$caracteristicas->hardware)}}">
    </div>
</div>
<div class="row">
    <div class="col-md-6">
      <label for="software" class="form-label">Software</label>
      <input type="text" class="form-control" id="software" name="software"
      value="{{old('software',$caracteristicas->software)}}">
    </div>
</div>

<div class="row" >
    <div class="col-12 " rows="3">
      <label for="description" class="form-label">Descripción</label>
      <textarea class="form-control" id="description" rows="3" name="description"
     >{{old('description',$caracteristicas->description)}}</textarea>
    </div>
    
</div>


 
<div class="row">
    <div class="col-12">
      <button style="width: 150px" type="submit" class="btn btn-primary btn-lg mt-5">Enviar</button>
    </div>

</div>
