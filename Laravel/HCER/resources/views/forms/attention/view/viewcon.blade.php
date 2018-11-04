 <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Motivo de Consulta</th>
                    <th>Médico</th>
                    <th>Fecha de Atención</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @if (auth()->user()->is_admin)
                @forelse ($rconsadmin as $key => $rcon)

                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$rcon->reason_short}}</td>
                    <td>{{$rcon->medic->name}} {{$rcon->medic->lastname}}</td>
                     <td>{{$rcon->created_at}}</td>

                   
                    <td>
                    
                        
                          
                            @if ($rcon->trashed())
                          <a href="{{url('pacientea/consulta/restaurar')}}/{{ $rcon->id }}" class="btn btn-sm btn-success" title="Activar">
                              <span class="glyphicon glyphicon-repeat"></span>
                        </a>   
                        @else
                         
                       <a href="{{url('/pacientea/ver')}}/{{ $rcon->id }}" class="btn btn-sm btn-success" title="Ver ficha de atención">
                            <span class="glyphicon glyphicon-book"></span>

                        </a>   
                       <a href="{{url('/pacientea/medico')}}/{{ $rcon->id_user }}" class="btn btn-sm btn-primary" title="Perfil del médico">
                            <span class="glyphicon glyphicon-user"></span>

                        </a>  

                        <a href="{{url('/pacientea/consulta/eliminar')}}/{{ $rcon->id }}" class="btn btn-sm btn-danger" title="Dar de baja">
                            <span class="glyphicon glyphicon-remove"></span>

                        </a>   
                          @endif

                            
                        
                          
                       
                        
                      
                       
                        
                    </td>
                </tr>

                @empty
                 
                <div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4>No Existen Consulta Anteriores!</h4>
             
            </div>
               
                
         
        
                @endforelse
            </tbody>
        </table>


          {!! $rconsadmin->render()!!}
    @endif

     @if (auth()->user()->is_medic)
                @forelse ($rcons as $key => $rcon)

                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$rcon->reason_short}}</td>
                    <td>{{$rcon->medic->name}} {{$rcon->medic->lastname}}</td>
                     <td>{{$rcon->created_at}}</td>

                   
                    <td>
                    
                        
                       <a href="{{url('/pacientem/ver')}}/{{ $rcon->id }}" class="btn btn-sm btn-success" title="Ver ficha de atención">
                            <span class="glyphicon glyphicon-book"></span>

                        </a>   
                       <a href="{{url('/pacientem/medico')}}/{{ $rcon->id_user }}" class="btn btn-sm btn-primary" title="Perfil del médico">
                            <span class="glyphicon glyphicon-user"></span>

                        </a>  
                        
                    </td>
                </tr>

                @empty
                 
                <div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4>No Existen Consulta Anteriores!</h4>
             
            </div>
               
                
         
        
                @endforelse
            </tbody>
        </table>


          {!! $rcons->render()!!}
    @endif