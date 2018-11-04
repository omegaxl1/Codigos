


 <div class="panel-body">
    

         <div style="width:50%; float:left;">
        
           
            
      <div class="form-group">
               <label class="col-lg-2 control-label" for="phone">Teléfono</label>
                <div class="col-lg-9">
                <input disabled type="text" name="phone" class="form-control" value="{{ old('phone',$patientedit->phone) }}">
               </div>
            </div>
 
            




          </div>
      <div style="width:50%; float:left; margin-bottom: 10px;">

        
               <div class="form-group ">
               <label class="col-lg-3 control-label" for="email">Correo Electrónico</label>
               <div class="col-lg-8">
                <input  disabled type="email" name="email" class="form-control" value="{{ old('email',$patientedit->email) }}">

    </div>

 
  </div>


</div>

<div class="form-group ">
                 <label class="col-lg-2 control-label" for="address">Dirreción</label>
                 <div class="col-lg-9">
                <input disabled type="text" name="address" class="form-control" value="{{ old('address',$patientedit->address) }}">
                </div> 
            </div>


  
</div>

 