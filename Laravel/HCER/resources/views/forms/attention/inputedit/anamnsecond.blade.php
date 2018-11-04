 <div class="form-group">
          <label  class="col-lg-3 control-label">Alcoholismo</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" onkeyup="mayus(this);" name="alcohol" value="{{old('alcohol',$editpatianam->alcohol)}}">
          </div>
        </div>
         <div class="form-group">
          <label  class="col-lg-3 control-label">Tabaquismo</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" onkeyup="mayus(this);" name="smoking" value="{{old('smoking',$editpatianam->smoking)}}" >
          </div>
        </div>

         <div class="form-group">
          <label  class="col-lg-3 control-label">Drogas</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" onkeyup="mayus(this);" name="drugs" value="{{old('drugs',$editpatianam->drugs)}}" >
          </div>
        </div>