    <div class="form-group " >
  <label class="col-lg-2 control-label" for="n_specialties">Tipo examen médico</label>
  <div class="col-lg-8">
  <input type="text" name="title" class="form-control" onkeyup="mayus(this);" value="{{ old('title',$exammedic->title) }}">
  </div>
      <div class="form-group">
        <label for="textArea" class="col-lg-4 control-label">Observaciónes</label>
        <div class="col-lg-10">
          <textarea class="form-control" rows="6" name="observations" onkeyup="mayus(this);">{{old('observations',$exammedic->observations)}}</textarea>
          
        </div>
      </div>


     <button class="btn btn-primary">Actualizar</button>
           