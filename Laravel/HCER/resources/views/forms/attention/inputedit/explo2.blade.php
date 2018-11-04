         <div class="form-group">
      <label for="id_mouthpharynx" class="col-lg-5 control-label">Boca y faringe</label>
      <div class="col-lg-5">
        <select  class="form-control" name="id_mouthpharynx" >
          <option value=""></option>
          @foreach ($cpsps as $cpsp)
      <option value="{{$cpsp->id}}"@if($cpsp->id == $editexplo->id_mouthpharynx) selected @endif>{{$cpsp->dcpsp}}</option>
      

          @endforeach
        </select>

      </div>
        </div> 

         <div class="form-group">
      <label for="id_neck" class="col-lg-5 control-label">Cuello</label>
      <div class="col-lg-5">
        <select  class="form-control" name="id_neck" >
          <option value=""></option>
          @foreach ($cpsps as $cpsp)
     <option value="{{$cpsp->id}}"@if($cpsp->id == $editexplo->id_neck) selected @endif>{{$cpsp->dcpsp}}</option>
      

          @endforeach
        </select>

      </div>
        </div> 
      

      <div class="form-group">
      <label for="id_cardiopulmonary" class="col-lg-5 control-label">Cardio Pulmunar</label>
      <div class="col-lg-5">
        <select  class="form-control" name="id_cardiopulmonary" >
          <option value=""></option>
          @foreach ($cpsps as $cpsp)
     <option value="{{$cpsp->id}}"@if($cpsp->id == $editexplo->id_cardiopulmonary) selected @endif>{{$cpsp->dcpsp}}</option>
      

          @endforeach
        </select>

      </div>
        </div> 



      <div class="form-group">
      <label for="id_nervousystem" class="col-lg-5 control-label">Sistema Nervioso</label>
      <div class="col-lg-5">
        <select  class="form-control" name="id_nervousystem" >
          <option value=""></option>
          @foreach ($cpsps as $cpsp)
      <option value="{{$cpsp->id}}"@if($cpsp->id == $editexplo->id_nervousystem) selected @endif>{{$cpsp->dcpsp}}</option>
      

          @endforeach
        </select>

      </div>
        </div> 


  <div class="form-group">
      <label for="id_extremities" class="col-lg-5 control-label">Extremidades</label>
      <div class="col-lg-5">
        <select  class="form-control" name="id_extremities" >
          <option value=""></option>
          @foreach ($cpsps as $cpsp)
      <option value="{{$cpsp->id}}"@if($cpsp->id == $editexplo->id_extremities) selected @endif>{{$cpsp->dcpsp}}</option>
      

          @endforeach
        </select>

      </div>
        </div> 