<div class="panel panel-primary">
	<div class="panel-heading">Menú</div>

	<div class="panel-body">
		<ul class="nav nav-pills nav-stacked">
			@if (auth()->check())

			
				<li @if(request()->is('home')) class="active" @endif>
					<a href="/home">Inicio</a>
				</li>


				@if (auth()->user()->is_admin)




				<li @if(request()->is('pacientesa') ||request()->is('pacientea/*')) class="active" @endif>
					<a href="/pacientesa">Pacientes</a>
				</li>
				<li @if(request()->is('espacialidades')|| request()->is('espacialidades/*')) class="active" @endif>
					<a href="/espacialidades">Espcialidades</a>
				</li>
				

				<li role="presentation" class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
						 Usuarios <span class="caret"></span>
					</a>
					<ul class="dropdown-menu">
						<li @if(request()->is('administrador')||request()->is('administrador/*')) class="active" @endif><a href="/administrador">Administrador</a></li>
						<li @if(request()->is('medicos/*')||request()->is('medico/*')) class="active" @endif><a href="/medicos">Médicos</a></li>
						<li  @if(request()->is('auxiliar')||request()->is('auxiliar/*')) class="active" @endif><a href="/auxiliar">Auxiliar de Enfermeria</a></li>
						<li @if(request()->is('recepcionista')||request()->is('recepcionista/*')) class="active" @endif ><a href="/recepcionista">Recepcionista</a></li>
					</ul>
				</li>

					


				@endif

				@if (auth()->user()->is_medic)

				<li @if(request()->is('pacientesm') ||request()->is('pacientem/*')) class="active" @endif>
					<a href="/pacientesm">Pacientes</a>
				</li>
				<li @if(request()->is('examenes')|| request()->is('examenes/*')) class="active" @endif>
					<a href="/examenes">Registro de exámenes</a>
				</li>

				<li @if(request()->is('cita')|| request()->is('cita/*')) class="active" @endif>
					<a href="/cita">Ver citas</a>
				</li>

				<li @if(request()->is('expediente')|| request()->is('expediente/*')) class="active" @endif>
					<a href="/expediente">Expediente</a>
				</li>
				
				

				@endif

				 @if (auth()->user()->is_enfemr)

				 	<li @if(request()->is('pacientesn') ||request()->is('pacienten/*')) class="active" @endif>
					<a href="/pacientesn">Pacientes</a>
					</li>
					<li @if(request()->is('gestioncitasn')|| request()->is('gestioncitasn/*')) class="active" @endif>
					<a href="/gestioncitasn">Gestion de Turnos</a>
				</li>
			
				
				 	@endif

				@if (auth()->user()->is_recp)

				<li @if(request()->is('pacientesr') ||request()->is('pacientesr/*')) class="active" @endif>
					<a href="/pacientesr">Pacientes</a>
				</li>
				<li @if(request()->is('agendacitas')|| request()->is('agendacitas/*')) class="active" @endif>
					<a href="/agendacitas">Agendamineto de Turnos</a>
				</li>
				
				
				<li @if(request()->is('gestioncitas')|| request()->is('gestioncitas/*')) class="active" @endif>
					<a href="/gestioncitas">Gestion de Turnos</a>
				</li>


				
				@endif

				
			@else
				
				
			@endif
		</ul>
	</div>
</div>
