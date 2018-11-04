  <div class="form-group">
      <label for="id_ims" class="col-lg-2 control-label">IMS</label>
      <div class="col-lg-5">
        <select  class="form-control" name="id_ims" >
          <option value="0"></option>
          @foreach ($ims as $im)
      <option value="{{$im->id}}"@if($im->id == $viewvital->id_ims) selected @endif>{{$im->ims}}</option>
      

          @endforeach
        </select>

      </div>
      
        </div> 


