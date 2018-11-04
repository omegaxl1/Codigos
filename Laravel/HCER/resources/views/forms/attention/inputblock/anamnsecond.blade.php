 <div class="form-group">
          <label  class="col-lg-3 control-label">Alcoholismo</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" name="alcohol" value="{{old('alcohol',$viewpatianam->alcohol)}}" disabled>
          </div>
        </div>
         <div class="form-group">
          <label  class="col-lg-3 control-label">Tabaquismo</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" name="smoking" value="{{old('smoking',$viewpatianam->smoking)}}" disabled >
          </div>
        </div>

         <div class="form-group">
          <label  class="col-lg-3 control-label">Drogas</label>
          <div class="col-lg-8">
            <input type="text" class="form-control" name="drugs" value="{{old('drugs',$viewpatianam->drugs)}}" disabled>
          </div>
        </div>