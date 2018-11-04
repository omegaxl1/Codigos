

 <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ci</th>
                    <th>E-mail</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $key => $user)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$user->ci}}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{$user->lastname}}</td>
                    <td>

                         @if ($user->trashed())
                        <a href="{{url('usuario/restaurar')}}/{{ $user->id }}" class="btn btn-sm btn-success" title="Activar">
                              <span class="glyphicon glyphicon-repeat"></span>
                        </a>    
                        @else


                        @if (request()->is('administrador')||request()->is('administrador/*')  )
                            <a href="{{url('administrador/usuario/editar')}}/{{ $user->id }}" class="btn btn-sm btn-primary" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        @elseif (request()->is('medicos')||request()->is('medico/*'))
                             <a href="{{url('medico/usuario/editar')}}/{{ $user->id }}" class="btn btn-sm btn-primary" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>


                         @elseif (request()->is('auxiliar')||request()->is('auxiliar/*'))
                             <a href="{{url('auxiliar/usuario/editar')}}/{{ $user->id }}" class="btn btn-sm btn-primary" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>

                                @elseif (request()->is('recepcionista')||request()->is('recepcionista/*'))
                             <a href="{{url('recepcionista/usuario/editar')}}/{{ $user->id }}" class="btn btn-sm btn-primary" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>

                        

                        @endif
                          
                       
                        <a href="{{url('usuario/eliminar')}}/{{ $user->id }}" class="btn btn-sm btn-danger" title="Dar de baja">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>
                         @endif
                    </td>
                </tr>

                @empty
                 
                <div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4>Usuarios no existentes!</h4>
             
            </div>
               
                
         
        
                @endforelse
            </tbody>
        </table>


         {!! $users->render()!!}