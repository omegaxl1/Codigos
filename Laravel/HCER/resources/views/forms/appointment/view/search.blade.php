



<div class="form-group">

		 <select name="id_specialty" class="form-control">
       	<option value="0">Selecione una Especialidad</option>
     @foreach ($specialties as $specialty)

     	  <option value="{{$specialty->id}}">{{$specialty->n_specialties}}</option>
     @endforeach
        </select>
         

          <div class="col-lg-5">

          	 <input name="buscar" type="text" class="form-control" placeholder="Buscar">
     
   
        </div>

 
        <button type="submit" class="btn btn-info">Enviar</button>
