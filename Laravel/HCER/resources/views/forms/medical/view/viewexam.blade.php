<table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tipo de Examen</th>
                    <th>Observacion</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($exampatients as $key => $exampatient)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{$exampatient->title_short}}</td>
                    <td>{{$exampatient->observations_short}}</td>
                    
                    
                    <td>
                          <a href="{{url('examenes/ver/exam')}}/{{$exampatient->id}}" class="btn btn-sm btn-success" title="ver exámenes">
                          <span class="glyphicon glyphicon-eye-open"></span>
                        </a> 

                    </td>
                </tr>

                @empty
                 
                <div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4>No se encontrado exámenes médicos</h4>
             
            </div>
               
                
         
        
                @endforelse
            </tbody>
        </table>

 {!! $exampatients->render()!!}