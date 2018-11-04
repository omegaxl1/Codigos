@extends('layouts.app')

@section('content')

<div class="panel-body">
   @include('forms.attention.notification.notificationfile')
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Datos del Paciente </h3>
  </div>
  <div class="panel-body">
      <div class="form-horizontal" >

          
 @include('forms.patient.block.initialdata')

<ul class="nav nav-tabs">
  <li class="active"><a href="#datosgenerales" data-toggle="tab" aria-expanded="true">Datos Generales</a></li>
  <li class=""><a href="#localizacion" data-toggle="tab" aria-expanded="false">Localizacion</a></li>
 
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="datosgenerales">
   @include('forms.patient.block.basicdata')
  </div>
  <div class="tab-pane fade" id="localizacion">
   @include('forms.patient.block.location')
  </div>
  
</div>

</div>

  </div>
</div>
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Datos del Médico</h3>
  </div>
  <div class="panel-body">
  @include('forms.users.block.initialdata')
  @include('forms.users.block.specialties')
  </div>
</div>

<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Hora y fecha de la cita medica</h3>
  </div>
  <div class="panel-body">
   @include('forms.appointment.edit.hourdate')
  </div>
</div>

	
         
      </div>

      


@endsection