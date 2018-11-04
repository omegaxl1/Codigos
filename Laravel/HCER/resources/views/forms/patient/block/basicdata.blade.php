
   <div class="panel-body">

      <div class="form-group ">
               <label class="col-lg-2 control-label" for="occupation"> Ocupación del Paciente:</label>
                <div class="col-lg-9">
                <input   type="text" name="occupation" class="form-control" value="{{ old('occupation',$patientedit->occupation) }}" disabled>    
                </div> 
            </div>

       


        
           
    
           

            <div class="form-group ">
               <label class="col-lg-2 control-label" for="namecontact"> Nombre del Padre, Madre o Encargado :</label>
                <div class="col-lg-9">
                <input type="text" name="namecontact" class="form-control" value="{{ old('namecontact',$patientedit->namecontact) }}" disabled> </div>    
            </div>


            <div class="form-group ">
                <label class="col-lg-2 control-label" for="contphone"> Teléfono del Pariente  o Encargado del Paciente</label>
                  <div class="col-lg-9">
                <input type="text" name="contphone" class="form-control" value="{{ old('contphone',$patientedit->contphone) }}" disabled>
                </div>     
         


           
           
<div class="col-lg-9">
             <select disabled name="id_contact" class="form-control">
            <option value="0">Selecione tipo de contacto</option>
     @foreach ($contacts as $contact)


          <option value="{{$contact->id}}"@if($contact->id == $patientedit->id_contact) selected @endif >{{$contact->detail}}</option>
     @endforeach
        </select>

</div>
    </div>

        </div>

            