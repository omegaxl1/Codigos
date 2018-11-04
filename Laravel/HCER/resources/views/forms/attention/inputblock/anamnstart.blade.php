<div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Alergias</label>
      <div class="col-lg-10">

        <textarea class="form-control" rows="4" name="allergies" disabled>{{ old('allergies',$viewpatianam->allergies) }}
        </textarea>


        
      </div>
</div>

  <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Patologías Personales</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="4" name="p_pathologies" disabled >{{old('p_pathologies',$viewpatianam->p_pathologies)}}</textarea>
        
      </div>
    </div>



  <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Patologías Familiares</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="4" name="f_pathologies" disabled>{{old('f_pathologies',$viewpatianam->f_pathologies)}}</textarea>
        
      </div>
    </div>


  <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Quirúrgicos</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="4" name="surgical" disabled>{{old('surgical',$viewpatianam->surgical )}}</textarea>
        
      </div>
    </div>