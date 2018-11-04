  <div class="panel-heading"><h1 align="center">Diagnósticos</h1></div>
   <div class="panel-body">
    
               
               @forelse ($diagnosis as $key => $diag)
               <p class="lead">Expediente #{{$key+1 }}</p>
                <div class="panel-body">
                    <div style="width:50%; float:left;">
                      <p class="lead">Definitivo</p>
                       @if ($diag->id_def_1 == null) 
                    @else
                      <p class="lead">1:{{$diag->def1_block->descrip}}</p>
                     @endif
                      @if ($diag->id_def_2 == null) 
                    @else
                      <p class="lead">2:{{$diag->def2_block->descrip}}</p>
                     @endif
                      @if ($diag->id_def_3 == null) 
                    @else
                      <p class="lead">3:{{$diag->def3_block->descrip}}</p>
                     @endif
                      
                    </div>
                    <div style="width:50%; float:left;">
                     <p class="lead">Presuntivo</p>
                      @if ($diag->id_pers_1 == null) 
                    @else
                      <p class="lead">1:{{$diag->pers1_block->descrip}}</p>
                     @endif
                      @if ($diag->id_pers_2 == null) 
                    @else
                      <p class="lead">2:{{$diag->pers2_block->descrip}}</p>
                     @endif
                      @if ($diag->id_pers_3 == null) 
                    @else
                      <p class="lead">3:{{$diag->pers3_block->descrip}}</p>
                     @endif
                    </div>
                </div>
                <div class="panel-body">
                <p class="lead">Tratamiento:{{$diag->treatment}}</p> 
                <p class="lead">Recetas:{{$diag->recipe}}</p> 
                <p class="lead">Instrucciones:{{$diag->instructions}}</p> 
                <p class="lead">Médico responsable:{{$diag->medic->name}} {{$diag->medic->lastname}}</p>
    <p class="lead">Fecha de Atención:{{$diag->created_at}}</p>
              </div>

                  @empty
             
                <div class="alert alert-dismissible alert-warning">
              
              <h4 align="center">No se ha registrado los diagnósticos !</h4>
             
            </div>
                  @endforelse
        
   </div>