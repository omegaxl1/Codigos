<table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ci</th>
                    <th>Nombre/Apellidos</th>
                    <th>Teléfono</th>
                    <th>Género</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($patients as $key => $patient)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$patient->ci}}</td>
                    <td>{{$patient->namef }}/{{$patient->namel}}</td>
                    <td>{{$patient->phone}}</td>
                    <td>{{$patient->gender->gender}}</td>
                    
                    <td>
                          <a href="{{url('agendacitas/medico')}}/{{ $patient->id }}" class="btn btn-sm btn-success" >
                            Agendar
                        </a>    
                    </td>
                </tr>

                @empty
                 
                <div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4>paciente no existentes!</h4>
             
            </div>
               
                
         
        
                @endforelse
            </tbody>
        </table>

 {!! $patients->render()!!}