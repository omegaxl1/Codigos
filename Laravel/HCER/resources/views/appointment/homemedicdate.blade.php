@extends('layouts.app')

@section('content')

<div class="panel-body">
       
<div class="panel panel-primary">

  <div class="panel-heading">
    <h3 class="panel-title">Datos del Paciente para el agendamiento de la  cita medica</h3>
  </div>
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

	 <form action="{{url('agendacitas/busqueda')}}/{{$patientedit->id}}" class="navbar-form navbar-left" role="search">

        @include('forms.appointment.view.search')
      </form>

       

         
      </div>

       @include('forms.appointment.view.viewusers')


@endsection