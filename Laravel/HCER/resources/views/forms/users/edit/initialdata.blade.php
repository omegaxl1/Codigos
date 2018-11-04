           <div class="panel-body">
        @if (session('notification'))
          
         <div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>{{ session('notification') }}</strong> 
        </div>
        @endif



        @if(session('notialert'))
         <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>{{ session('notialert') }}</strong> 
        </div>

        @endif
         @if (count($errors) > 0)

       
    @foreach ($errors->all() as $error)
     <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
         <strong>{{ $error }}</strong> 
                 </div> 
                    @endforeach
  
       
            
        @endif


         <div style="width:50%; float:left;">
         <div class="form-group @if($errors->has('ci')) has-error @endif" >
                <label  class="col-lg-2 control-label" for="ci">CI</label>
                 <div class="col-lg-9">
                <input type="text" name="ci" class="form-control" value="{{ old('ci',$usersedit->ci) }}">
                </div>
                  


                

            </div>
            <div class="form-group  @if($errors->has('name')) has-error @endif">
                <label class="col-lg-2 control-label" for="name">Nombres</label>
                 <div class="col-lg-9">
                <input type="text" onkeyup="mayus(this);"  name="name" class="form-control" value="{{ old('name',$usersedit->name) }}">
                </div>
                 
            </div>
              <div class="form-group  @if($errors->has('lastname')) has-error @endif">
                <label class="col-lg-2 control-label" for="lastname">Apellidos</label>
                 <div class="col-lg-9">
                <input type="text" onkeyup="mayus(this);" name="lastname" class="form-control" value="{{ old('lastname',$usersedit->lastname) }}">
                </div>
                
            </div>

          </div>
      <div style="width:50%; float:left; margin-bottom: 10px;">
            <div class="form-group  @if($errors->has('birthday')) has-error @endif">
                <label class="col-lg-3 control-label" for="start">Fecha de nacimiento</label>
                 <div class="col-lg-9">
                <input type="date" name="birthday" class="form-control" value="{{ old('birthday',$usersedit->birthday ) }}">
                </div>
                 
            </div>

               <div class="form-group  @if($errors->has('address')) has-error @endif">
                <label class="col-lg-2 control-label"  for="address">Dirreción</label>
                 <div class="col-lg-9">
                <input type="text" onkeyup="mayus(this);" name="address" class="form-control" value="{{ old('address',$usersedit->address) }}">
                 
                </div>
            </div>

             <div class="form-group @if($errors->has('phone')) has-error @endif">
                <label class="col-lg-2 control-label" for="phone">Teléfono</label>
                <div class="col-lg-9">
                <input type="text" name="phone" class="form-control" value="{{ old('phone',$usersedit->phone) }}">
                </div>
            </div>

        </div>

        
             <div class="form-group @if($errors->has('email')) has-error @endif">
                <label for="email">E-mail</label>
                <input type="email" name="email" class="form-control" value="{{ old('email',$usersedit->email) }}">
                
            </div>

            