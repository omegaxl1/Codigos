        <div class="panel-body">
     

         <div style="width:50%; float:left;">
         <div class="form-group @if($errors->has('ci')) has-error @endif" >
                <label  class="col-lg-2 control-label" for="ci">CI</label>
                 <div class="col-lg-9">
                <input type="text" name="ci" class="form-control" value="{{ old('ci',$usersedit->ci) }}" disabled>
                </div>
                  


                

            </div>
            <div class="form-group  @if($errors->has('name')) has-error @endif">
                <label class="col-lg-2 control-label" for="name">Nombres</label>
                 <div class="col-lg-9">
                <input type="text" onkeyup="mayus(this);"  name="name" class="form-control" value="{{ old('name',$usersedit->name) }}" disabled>
                </div>
                 
            </div>
              <div class="form-group  @if($errors->has('lastname')) has-error @endif">
                <label class="col-lg-2 control-label" for="lastname">Apellidos</label>
                 <div class="col-lg-9">
                <input type="text" onkeyup="mayus(this);" name="lastname" class="form-control" value="{{ old('lastname',$usersedit->lastname) }}" disabled>
                </div>
                
            </div>

          </div>
      <div style="width:50%; float:left; margin-bottom: 10px;">
           

               <div class="form-group  @if($errors->has('address')) has-error @endif">
                <label class="col-lg-2 control-label"  for="address">Dirreción</label>
                 <div class="col-lg-9">
                <input type="text" onkeyup="mayus(this);" name="address" class="form-control" value="{{ old('address',$usersedit->address) }}" disabled>
                 
                </div>
            </div>

             <div class="form-group @if($errors->has('phone')) has-error @endif">
                <label class="col-lg-2 control-label" for="phone">Teléfono</label>
                <div class="col-lg-9">
                <input type="text" name="phone" class="form-control" value="{{ old('phone',$usersedit->phone) }}" disabled>
                </div>
            </div>

            <div class="form-group @if($errors->has('email')) has-error @endif">
                <label class="col-lg-4 control-label" for="email">E-mail</label>
             <div class="col-lg-7">
                <input type="email" name="email" class="form-control" value="{{ old('email',$usersedit->email) }}" disabled>
            </div>
            </div>


        </div>

        
             
            