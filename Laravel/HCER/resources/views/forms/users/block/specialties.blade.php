

<div class="form-group @if($errors->has('id_specialty')) has-error @endif">
      <label for="id_specialty">Especialidad</label>

       <select  disabled name="id_specialty" class="form-control">
       		<option value="0">Selecione una Especialidad</option>
     @foreach ($specialties as $specialty)

     	  <option value="{{$specialty->id}}" @if($specialty->id == $usersedit->id_specialty) selected @endif>{{$specialty->n_specialties}}</option>

     @endforeach
        </select>

        
  
      
</div>  

<div class="form-group">
<label for="specialty_detail">Detalles</label>

</div>
<div class="form-group">
<textarea rows="5" cols="100" disabled>{{$usersedit->especial->detail}}</textarea>

</div>