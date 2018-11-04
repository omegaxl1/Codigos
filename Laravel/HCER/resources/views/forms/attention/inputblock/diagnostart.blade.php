  <div class="form-group">
             <label for="textArea" class="col-lg-7 control-label">Tratamiento</label>
               <div class="col-lg-13">
                <textarea disabled class="form-control" rows="5" name="treatment"  onkeyup="mayus(this);" >{{old('treatment',$viewdiag->treatment)}}</textarea>
        
              </div>
            </div>


            <div class="form-group">
             <label for="textArea" class="col-lg-5 control-label">Recetas</label>
               <div class="col-lg-13">
                <textarea disabled class="form-control" rows="5" name="recipe"  onkeyup="mayus(this);" >{{old('recipe',$viewdiag->recipe)}}</textarea>
        
              </div>
            </div>
          <div class="form-group">
             <label for="textArea" class="col-lg-5 control-label">Instrucciones</label>
               <div class="col-lg-13">
                <textarea disabled class="form-control" rows="5" name="instructions"  onkeyup="mayus(this);" >{{old('instructions',$viewdiag->instructions)}}</textarea>
        
              </div>
            </div>
            