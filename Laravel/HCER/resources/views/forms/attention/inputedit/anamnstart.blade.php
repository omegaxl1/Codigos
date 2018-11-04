<div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Alergias</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="4" onkeyup="mayus(this);" name="allergies">{{ old('allergies',$editpatianam->allergies) }}
        </textarea>


        
      </div>
</div>

  <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Patologías Personales</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="4" onkeyup="mayus(this);" name="p_pathologies"  >{{old('p_pathologies',$editpatianam->p_pathologies)}}</textarea>
        
      </div>
    </div>



  <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Patologías Familiares</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="4" onkeyup="mayus(this);" name="f_pathologies" >{{old('f_pathologies',$editpatianam->f_pathologies)}}</textarea>
        
      </div>
    </div>


  <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Quirúrgicos</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="4" onkeyup="mayus(this);" name="surgical" >{{old('surgical',$editpatianam->surgical )}}</textarea>
        
      </div>
    </div>