<div class="form-group">
      <label for="textArea" class="col-lg-5 control-label">Motivo de la Consulta</label>
      <div class="col-lg-15">
        <textarea class="form-control" rows="6" name="reason" onkeyup="mayus(this);">{{old('reason',$editrconsult->reason)}}</textarea>
        
      </div>
    </div>