 <div class="panel-heading"><h1 align="center">Signos vitales</h1></div>
	 <div class="panel-body">
	 	
            	 @forelse ($vitalsigns as $key => $vital)
                    <p class="lead">Expediente #{{$key+1 }}</p>
                    <div style="width:50%; float:left;">
                   <p class="lead">Frecuencia Cardíaca:{{ $vital->heartrate}}</p>
                    <p class="lead">Perimetro Cefálico:{{ $vital->head_circunference}}/CM</p>
                     <p class="lead">Tensión Arterial:{{ $vital->bloodpressure}}</p>
                     <p class="lead">Peso:{{ $vital->weight}}/Kilos</p>
                    </div>
                    <div style="width:50%; float:left;">
                     <p class="lead">Frecuencia Respiratoria:{{ $vital->breathingfrequency}}</p>
                     <p class="lead">Temperatura:{{ $vital->temperature}}/Oral</p>
                     <p class="lead">Saturación de Oxigeno:{{ $vital->oxygensaturation}}</p>
                     <p class="lead">Estatura:{{ $vital->size}}</p>
                    </div>
                    @if ($vital->id_ims == null)

                    @else
                    <p class="lead">IMC:{{$vital->ims->ims}}</p>
                    @endif
					<p class="lead">Médico responsable:{{$vital->medic->name}} {{$vital->medic->lastname}}</p>
                    <p class="lead">Fecha de Atención:{{$vital->created_at}}</p>
                   

                  @empty
             
                <div class="alert alert-dismissible alert-warning">
              
              <h4 align="center">No se ha registrado los Signos vitales!</h4>
             
            </div>
                  @endforelse
      
	 </div>