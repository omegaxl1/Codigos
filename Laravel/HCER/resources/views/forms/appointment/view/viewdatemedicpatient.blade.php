 <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Hora</th>
                    <th>Minutos</th>
                    <th>Z/Horaria</th>
                    <th>Estado</th>
                    <th>Nombre/Apellidos</th>
                    <th>Teléfono</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($turnmedics as $key => $turnmedic)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$turnmedic->hour}}</td>
                    <td>{{$turnmedic->minutes}}</td>
                    <td>{{$turnmedic->timezone}}</td>
                    <td>{{$turnmedic->statusdate->status}}</td>
                    <td>{{$turnmedic->patientdate->namef}}/{{$turnmedic->patientdate->namel}}</td>
                    <td>{{$turnmedic->patientdate->phone}}</td>
                    <td>

                 @if (auth()->user()->is_medic)
                 <a href="{{url('pacientem/consulta')}}/{{ $turnmedic->id_patient }}" class="btn btn-sm btn-success" >
                            Consulta
                </a>    
                <a href="{{url('pacientem/editar')}}/{{ $turnmedic->id_patient }}" class="btn btn-sm btn-primary" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>

                </a>    
                @endif  
                @if (auth()->user()->is_enfemr)
                <a href="{{url('pacienten/consulta')}}/{{ $turnmedic->id_patient }}" class="btn btn-sm btn-success" >
                    Consulta
                </a>
                @endif  
                @if (auth()->user()->is_recp)
                  <a href="{{url('gestioncitas/ver/paciente/citas')}}/{{$turnmedic->id}}" class="btn btn-sm btn-success" >
                    Editar Cita
                  </a>  

                 <a href="{{url('gestioncitas/ver/paciente/citas/eliminar')}}/{{$turnmedic->id}}" class="btn btn-sm btn-danger" title="Elimininar Cita">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>  
                @endif
                   
                    </td>
                </tr>

                @empty
                 
                <div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4>No se han registrado citas en la fecha!</h4>
             
            </div>
               
                
         
        
                @endforelse
            </tbody>
        </table>


         {!! $turnmedics->render()!!}