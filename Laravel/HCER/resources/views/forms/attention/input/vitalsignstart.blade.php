<div class="form-group">
        <label for="heartrate" class="col-lg-4 control-label">Frecuencia Cardíaca</label>
        <div class="col-lg-3">
        <input type="text" class="form-control" name="heartrate" value="{{old('heartrate')}}">
        </div>
        </div>

        <div class="form-group">
        <label for="head_circunference" class="col-lg-4 control-label">Perimetro Cefálico</label>
         <div class="col-lg-3">
        <input type="text" class="form-control" name="head_circunference" value="{{old('head_circunference')}}">
        </div>
        <div class="col-lg-2">
         <label class="col-lg-0 control-label">/Cm</label>
        </div>
       </div>

        <div class="form-group">
        <label for="bloodpressure" class="col-lg-4 control-label">Tensión Arterial</label>
         <div class="col-lg-3">
        <input type="text" class="form-control" name="bloodpressure" value="{{old('bloodpressure')}}">
        </div>
       </div>
         <div class="form-group">
        <label for="weight" class="col-lg-4 control-label">Peso</label>
         <div class="col-lg-3">
        <input type="text" class="form-control" name="weight" value="{{old('weight')}}" id="campo_1" onchange="sumar(this.value);">
        </div>
        <div class="col-lg-2">
         <label class="col-lg-0 control-label">/Kilos</label>
        </div>
       </div>

     <div class="form-group">
         <label for="id_ims" class="col-lg-4 control-label">IMC</label>
         <div class="col-lg-3">
        <input type="text" class="form-control" name="imc" value="{{old('imc')}}" id="spTotal" disabled>
        </div>
         
       </div>
