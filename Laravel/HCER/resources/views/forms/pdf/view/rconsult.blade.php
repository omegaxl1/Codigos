  <div class="panel-heading"><h1 align="center">Motivos de consulta</h1></div>
	 <div class="panel-body">
	 	 <table class="table table-bordered">
		<thead>
                <tr>
                    <th>#</th>
                    <th>Motivo de Consulta</th>
                    <th>Médico</th>
                    <th>Fecha de Atención</th>
                   
                </tr>
            </thead>
            <tbody>
            	 @forelse ($rconsultations as $key => $rcon)
               <tr>
                    <td>{{$key+1 }}</td>
                    <td>{{$rcon->reason}}</td>
                    <td>{{$rcon->medic->name}} {{$rcon->medic->lastname}}</td>
                     <td>{{$rcon->created_at}}</td>

                  @empty
             
                <div class="alert alert-dismissible alert-warning">
              
              <h4 align="center">No se ha registrado un motivo de consulta !</h4>
             
            </div>
                  @endforelse
         </tbody>
     </table>
	 </div>