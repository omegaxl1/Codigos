<table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ci</th>
                    <th>Nombre/Apellidos</th>
                    <th>Género</th>
                    <th>Fecha de Nacimineto</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($patients as $key => $patient)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$patient->ci}}</td>
                    <td>{{$patient->namef }}/{{$patient->namel}}</td>
                    <td>{{$patient->gender->gender}}</td>
                    <td>{{$patient->birthday}}</td>
                    <td>
                        @if (auth()->user()->is_admin)


                          @if ($patient->trashed())
                        <a href="{{url('pacientea/restaurar')}}/{{ $patient->id }}" class="btn btn-sm btn-success" title="Activar">
                              <span class="glyphicon glyphicon-repeat"></span>
                        </a>    
                        @else

                             <a href="{{url('pacientea/consulta')}}/{{ $patient->id }}" class="btn btn-sm btn-success" >
                            Consulta
                        </a>    
                         

                              <a href="{{url('pacientea/eliminar')}}/{{ $patient->id }}" class="btn btn-sm btn-danger" title="Dar de baja">
                            <span class="glyphicon glyphicon-remove"></span>
                        </a>

                        @endif

                    @endif

                    @if(auth()->user()->is_medic)

                     <a href="{{url('pacientem/consulta')}}/{{ $patient->id }}" class="btn btn-sm btn-success" >
                            Consulta
                        </a>    

                       

                          <a href="{{url('pacientem/editar')}}/{{ $patient->id }}" class="btn btn-sm btn-primary" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>

                        </a>    
                    @endif
               @if (auth()->user()->is_enfemr)

             <a href="{{url('pacienten/consulta')}}/{{ $patient->id }}" class="btn btn-sm btn-success" >
                            Consulta
                        </a>    
                 @endif

                @if (auth()->user()->is_recp)
                       <a href="{{url('pacienter/editar')}}/{{ $patient->id }}" class="btn btn-sm btn-primary" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>

                        </a>   
                @endif

                    </td>
                </tr>

                @empty
                 
                <div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4>Pacientes no existentes!</h4>
             
            </div>
               
                
         
        
                @endforelse
            </tbody>
        </table>

 {!! $patients->render()!!}