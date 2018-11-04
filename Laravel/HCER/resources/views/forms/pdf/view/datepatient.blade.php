<div class="form-horizontal" >
	<h1 align="center">Expediente Médico</h1>
	<h2 align="center">{{$patient->ci}}-{{$patient->namef}}-{{$patient->namel}}</h2>
	<div style="width:50%; float:left;">
		<p class="lead">Dirreción:{{$patient->address}}</p>
		<p class="lead">Teléfono:{{$patient->phone}}</p>
		<p class="lead">Ocupaccion:{{$patient->occupation}}</p>
		<p class="lead">Fecha de registro:{{$patient->created_at}}</p>
		
    </div>
  <div style="width:50%; float:left;">
  	<p class="lead">Fecha de nacimiento:{{$patient->birthday}}</p>
	<p class="lead">Tipo de grupo sanguinio:{{$patient->bloodtype->blood}}</p>
	<p class="lead">Género:{{$patient->gender->gender}}</p>
	
  </div>
<div class="panel-body">
  	<p class="lead">Médico responsable:{{$patient->medic->name}} {{$patient->medic->lastname}}</p>
  	<p class="lead">Fecha de actualizacion:{{$patient->updated_at}}</p>
  </div>
</div>