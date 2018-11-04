

 <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ci</th>
                    <th>Nombre/Apellidos</th>
                    <th>Teléfono</th>
                    <th>Dirreción</th>
                    <th>Especialidad</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($users as $key => $user)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$user->ci}}</td>
                    <td>{{ $user->name }}/{{$user->lastname}}</td>

                    <td>{{$user->phone}}</td>
                    <td>{{$user->address}}</td>
                    <td>{{$user->especial->n_specialties}}</td>
                   
                    <td>

                    @if (auth()->user()->is_recp)
                     <a href="{{url('gestioncitas/ver/medico/citas')}}/{{$user->id}}" class="btn btn-sm btn-success" >
                            Ver agenda
                        </a>    
                     @endif
                     @if (auth()->user()->is_enfemr)
                       <a href="{{url('gestioncitasn/ver/medico/citas')}}/{{$user->id}}" class="btn btn-sm btn-success" >
                            Ver agenda
                        </a>    
                      @endif

                          
                        
                    </td>
                </tr>

                @empty
                 
                <div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4> Usuarios no existentes!</h4>
             
            </div>
               
                
         
        
                @endforelse
            </tbody>
        </table>


         {!! $users->render()!!}