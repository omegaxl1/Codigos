         <div class="form-group">
      <label for="id_cie10" class="col-lg-5 control-label">Diagnóstico Lista Internacional CIE-10</label>
      <select  disabled  name="id_cie10" class="form-control" >
         <option value="0">Selecione un Diagnóstico  CIE10</option>
      <div class="col-lg-5">
        
         
       @foreach ($cis10s as $cis10)

        <option value="{{$cis10->id}}"@if($cis10->id == $viewdiag->id_ci10) selected @endif>{{$cis10->cod_4}}-{{$cis10->descrip}}</option>
         @endforeach
        </select>

      </div>

      