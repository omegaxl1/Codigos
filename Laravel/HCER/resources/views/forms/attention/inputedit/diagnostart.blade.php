 <div class="form-group">
             <label for="textArea" class="col-lg-5 control-label">Tratamiento</label>
               <div class="col-lg-13">
                <textarea class="form-control" rows="5" name="treatment"  onkeyup="mayus(this);" >{{old('treatment',$editdiag->treatment)}}</textarea>
        
              </div>
            </div>


            <div class="form-group">
             <label for="textArea" class="col-lg-5 control-label">Recetas</label>
               <div class="col-lg-13">
                <textarea class="form-control" rows="5" name="recipe"  onkeyup="mayus(this);" >{{old('recipe',$editdiag->recipe)}}</textarea>
        
              </div>
            </div>
          <div class="form-group">
             <label for="textArea" class="col-lg-5 control-label">Instrucciones</label>
               <div class="col-lg-13">
                <textarea class="form-control" rows="5" name="instructions"  onkeyup="mayus(this);" >{{old('instructions',$editdiag->instructions)}}</textarea>
        
              </div>
            </div>
            