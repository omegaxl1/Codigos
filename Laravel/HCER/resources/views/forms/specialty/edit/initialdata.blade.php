   <div class="form-group " >
    <label class="col-lg-2 control-label" for="n_specialties">Especialidad</label>
     <div class="col-lg-9">
     <input type="text" name="n_specialties" class="form-control" onkeyup="mayus(this);" value="{{ old('n_specialties',$editspecialty->n_specialties) }}">
        </div>


      <div class="form-group">
        <label for="textArea" class="col-lg-5 control-label">Descripción</label>
        <div class="col-lg-10">
          <textarea class="form-control" rows="6" name="detail" onkeyup="mayus(this);">{{old('detail',$editspecialty->detail)}}</textarea>
          
        </div>
      </div>


   <button class="btn btn-primary">Actualizar</button>
           
