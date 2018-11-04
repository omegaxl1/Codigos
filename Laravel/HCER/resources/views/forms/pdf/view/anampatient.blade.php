<div class="panel-heading"><h1 align="center">Anamensis</h1></div>
  @if($patientanamne == null)
  <p class="lead">Ficha de anamnsis no registrada</p>
  @else 
   <div class="panel-body">
	
	<p class="lead">Alergias:{{$patientanamne->allergies}}</p>
	<p class="lead">Patologías Personales:{{$patientanamne->p_pathologies}}</p>
	<p class="lead">Patologías Familiares:{{$patientanamne->f_pathologies}}</p>
	<p class="lead">Quirúrgicos:{{$patientanamne->surgical}}</p>

	 <div class="panel-heading"><h3 align="center">Personales No Patológicos</h3></div>
    <div style="width:50%; float:left;">
    <p class="lead">Alcoholismo:{{$patientanamne->alcohol}}</p>
    <p class="lead">Tabaquismo:{{$patientanamne->smoking}}</p>
    <p class="lead">Drogas:{{$patientanamne->drugs}}</p>
	</div>
	<div style="width:50%; float:left;">
		<p class="lead">Inmunizaciones:{{$patientanamne->inmunizaciones}}</p>
		<p class="lead">Otros:{{$patientanamne->others}}</p>
		
		

	</div>
	<div class="panel-body">
	<p class="lead">Médico responsable:{{$patientanamne->medic->name}} {{$patientanamne->medic->lastname}}</p>
    <p class="lead">Fecha de Atención:{{$patientanamne->created_at}}</p>
				</div>
	</div>

  @endif