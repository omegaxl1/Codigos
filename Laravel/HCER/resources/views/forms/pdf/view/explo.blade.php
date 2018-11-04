 <div class="panel-heading"><h1 align="center">Exploraciones por regiones</h1></div>
	 <div class="panel-body">
	 	
            	 @forelse ($exploregions as $key => $explo)
                    <p class="lead">Expediente #{{$key+1 }}</p>
                    <p class="lead"> CP - CON EVIDENCIA DE PATOLOGÍA</p>
                    <p class="lead">SP - SIN EVIDENCIA DE PATOLOGÍA</p>

                    <div class="panel-body">
                    <div style="width:50%; float:left;">
                   @if ($explo->id_head == null) 
                    @else
                    <p class="lead">Cabeza:{{$explo->head->dcpsp}}</p>
                    @endif
                    @if ($explo->id_eyes == null) 
                    @else
					<p class="lead">Ojos:{{$explo->eyes->dcpsp}}</p>
					@endif
					
					 @if ($explo->id_ears == null) 
                    @else
					<p class="lead">Oídos:{{$explo->ears->dcpsp}}</p>
					@endif

					 @if ($explo->id_nose == null) 
                    @else
					<p class="lead">Nariz:{{$explo->nose->dcpsp}}</p>
					@endif

					@if ($explo->id_abdomen == null) 
                    @else
					<p class="lead">Abdomen:{{$explo->abdomen->dcpsp}}</p>
					@endif
					
                    </div>
                    <div style="width:50%; float:left;">
                    @if ($explo->id_mouthpharynx == null) 
                    @else
					<p class="lead">Boca y faringe:{{$explo->mouthpharynx->dcpsp}}</p>
					@endif
					
                 	@if ($explo->id_neck == null) 
                    @else
					<p class="lead">Cuello:{{$explo->neck->dcpsp}}</p>
					@endif
					

					@if ($explo->id_cardiopulmonary == null) 
                    @else
					<p class="lead">Cardio Pulmunar:{{$explo->cardiopulmonary->dcpsp}}</p>
					@endif


					@if ($explo->id_nervousystem == null) 
                    @else
					<p class="lead">Sistema Nervioso:{{$explo->nervousystem->dcpsp}}</p>
					@endif

					@if ($explo->id_extremities == null) 
                    @else
					<p class="lead">Extremidades:{{$explo->extremities->dcpsp}}</p>
					@endif
                    </div>
                </div>
                    
					<div class="panel panel-default">
                    @if ($explo->details == null) 
                    @else
                    <p class="lead">Observaciónes:{{$explo->details}}</p>
				   @endif
				</div>
				<div class="panel-body">
					<p class="lead">Médico responsable:{{$explo->medic->name}} {{$explo->medic->lastname}}</p>
                     <p class="lead">Fecha de Atención:{{$explo->created_at}}</p>
				</div>
                  @empty
             
                <div class="alert alert-dismissible alert-warning">
              
              <h4 align="center">No se ha registrado las Exploraciones por regiones!</h4>
             
            </div>
                  @endforelse
      
	 </div>