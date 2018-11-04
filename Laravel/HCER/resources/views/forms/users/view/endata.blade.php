
            <div class="form-group @if($errors->has('password')) has-error @endif">
                <label for="password">Contraseña</label>
                <input type="text" name="password" class="form-control" value="{{ old('password', str_random(8)) }}">

               
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Registrar</button>
            </div>