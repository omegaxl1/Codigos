<div class="panel-body">



  <div style="width:50%; float:left; margin-bottom: 10px;">
         <div class="form-group ">
            <label class="col-lg-3 control-label" for="name">Nombre</label>
            <div class="col-lg-9">
                <input type="text"   name="name" class="form-control" value="{{ old('name',$useredit->name) }}">
            </div>

        </div>

        <div class="form-group ">
            <label class="col-lg-2 control-label" for="email">Email</label>
            <div class="col-lg-9">
            <input type="text" name="email" class="form-control" value="{{ old('email',$useredit->email) }}">
             </div>

        </div>

        <div class="form-group ">
            <label class="col-lg-2 control-label" for="password">Contraseña</label>
            <div class="col-lg-9">
            <input type="text" name="password" class="form-control" value="{{ old('password', str_random(8)) }}">
             </div>

        </div>
        <select name="id_rol" class="form-control">
            <option value="0">Selecione un rol</option>
            @foreach ($roles as $role)
            <option value="{{$role->id}}"@if($role->id == $useredit->rol->id) selected @endif>{{$role->rol}}</option>
            @endforeach
        </select>


    </div>

</div>

