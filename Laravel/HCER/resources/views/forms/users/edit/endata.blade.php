
            <div class="form-group @if($errors->has('password')) has-error @endif">
                <label for="password">Contraseña <em>Ingresar solo si se desea modificar</em></label>
                <input type="text"  name="password" class="form-control" value="{{ old('password')}}">

                
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Actualizar Datos</button>
            </div>