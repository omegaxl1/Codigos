  <div class="panel-heading"><h1 align="center">Evoluciónes </h1></div>
   <div class="panel-body">
    
               
               @forelse ($evolutions as $key => $evo)
               <p class="lead">Expediente #{{$key+1 }}</p>
       
                <div class="panel-body">
                <p class="lead">Observaciónes:{{$evo->devolution}}</p> 
                
              </div>
               <p class="lead">Médico responsable:{{$evo->medic->name}} {{$evo->medic->lastname}}</p>
              <p class="lead">Fecha de Atención:{{$evo->created_at}}</p>

                  @empty
             
                <div class="alert alert-dismissible alert-warning">
              
              <h4 align="center">No se ha registrado las evoluciónes !</h4>
             
            </div>
                  @endforelse
        
   </div>