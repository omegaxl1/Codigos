          <div class="panel-body">

     

         <div style="width:50%; float:left;">
        
           
              <div class="form-group ">
                <label class="col-lg-2 control-label" for="ci">Ci</label>
                 <div class="col-lg-9">
                <input type="text" name="ci" class="form-control" value="{{ old('ci') }}">
                </div>     
            </div>

            <div class="form-group ">
                <label class="col-lg-2 control-label" for="namef">Nombre</label>
                 <div class="col-lg-9">
                <input type="text" onkeyup="mayus(this);" name="namef" class="form-control" value="{{ old('namef') }}">
                </div>     
            </div>

            
          <div class="form-group">

         <label class="col-lg-2 control-label" for="gender"> Género</label>
           
         <div class="col-lg-6">
             <select name="id_gender" class="form-control">
            <option value="0">Selecione el Género</option>
     @foreach ($genders as $gender)

          <option value="{{$gender->id}}">{{$gender->gender}}</option>
     @endforeach
        </select>
      </div>


    </div>

     



          </div>
      <div style="width:50%; float:left; margin-bottom: 10px;">

         <div class="form-group  @if($errors->has('birthday')) has-error @endif">
                <label class="col-lg-3 control-label" for="start">Fecha de nacimiento</label>
                 <div class="col-lg-9">
                <input type="date" name="birthday" class="form-control" value="{{ old('birthday', date('Y-m-d')) }}">
              </div>
            </div>

      
                

          
         <div class="form-group ">
                <label class="col-lg-2 control-label" for="lastname">Apellidos</label>
                 <div class="col-lg-9">
                <input type="text" onkeyup="mayus(this);" name="lastname" class="form-control" value="{{ old('lastname') }}">

                </div>
            </div>


           

 <div class="form-group">

         <label class="col-lg-3 control-label" for="bloodtypes"> Tipo de Sangre</label>
            <div class="col-lg-8">

             <select name="id_bloodtype" class="form-control">
            <option value="0">Selecione el Tipo de Sanguinio</option>
     @foreach ($bloodtypes as $bloodtype)

          <option value="{{$bloodtype->id}}">{{$bloodtype->blood}}</option>
     @endforeach
        </select>
    </div>

    </div>

         
  
     
</div>


        </div>

        
            

            