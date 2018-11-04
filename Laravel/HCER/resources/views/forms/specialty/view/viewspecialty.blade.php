<table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Especialidades</th>
                    <th>Detalles</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($specialties as $key => $specialty)
                <tr>
                <td>{{$key+1}}</td>
                <td>{{$specialty->n_specialties}}</td>
                <td>{{$specialty->detail}}</td>
                <td>

                     <a href="{{url('espacialidades/editar')}}/{{ $specialty->id }}" class="btn btn-sm btn-primary" title="Editar">
                            <span class="glyphicon glyphicon-pencil"></span>

                        </a>   

                     
                    
                    </td>
                </tr>

                @empty
                 
                <div class="alert alert-dismissible alert-warning">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              <h4> especialidad no existentes!</h4>
             
            </div>
               
                
         
        
                @endforelse
            </tbody>
        </table>

 {!! $specialties->render()!!}