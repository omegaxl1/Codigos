    <div class="form-group">
              <label  class="col-lg-3 control-label">Inmunizaciones</label>
              <div class="col-lg-8">
                <input type="text" class="form-control" onkeyup="mayus(this);" name="inmunizaciones"  value="{{old('inmunizaciones')}}">
              </div>
            </div>

            <div class="form-group">
            <label for="textArea" class="col-lg-2 control-label">Otros</label>
            <div class="col-lg-10">
              <textarea class="form-control" rows="3" name="others" onkeyup="mayus(this);">{{old('others')}}</textarea>
             
            </div>
              </div>
        </div>