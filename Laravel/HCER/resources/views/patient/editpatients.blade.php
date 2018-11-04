@extends('layouts.app')

@section('content')
    @include('forms.patient.notification.notifications')
@if (auth()->user()->is_medic || auth()->user()->is_recp )
<div class="panel panel-primary">
    <div class="panel-heading">Editar  Paciente</div>

    <div class="panel-body">
       
      
       
  @if (auth()->user()->is_medic)
        <form class="form-horizontal" action="{{url('pacientem/actualizar')}}/{{$patientedit->id}}" method="POST">
          @endif
           @if (auth()->user()->is_recp)
        <form class="form-horizontal" action="{{url('pacienter/actualizar')}}/{{$patientedit->id}}" method="POST">
          @endif
            {{ csrf_field() }}

          
             @include('forms.patient.edit.initialdata')

<ul class="nav nav-tabs">
     @if (auth()->user()->is_medic)
  <li class=""><a href="#datosgenerales" data-toggle="tab" aria-expanded="true">Datos Generales</a></li>
    @endif
  <li class="active"><a href="#localizacion" data-toggle="tab" aria-expanded="false">Localizacion</a></li>
 
</ul>
<div id="myTabContent" class="tab-content">
   @if (auth()->user()->is_medic)
  <div class="tab-pane fade " id="datosgenerales">
   @include('forms.patient.edit.basicdata')
  </div>
    @endif
  <div class="tab-pane fade active in" id="localizacion">
   @include('forms.patient.edit.location')
  </div>
  
</div>

     @include('forms.patient.edit.endata')
        </form>

  </div>
</div>
@endif

<div class="panel panel-primary">
	  <div class="panel-heading">Pacientes</div>

    <div class="panel-body">
       


@if (auth()->user()->is_medic)
   <form action="{{url('pacientem/pacient')}}" class="navbar-form navbar-left" role="search">

        @include('forms.users.view.search')
    @endif

     @if (auth()->user()->is_recp)
         <form action="{{url('pacienter/pacient')}}" class="navbar-form navbar-left" role="search">

        @include('forms.users.view.search')
            @endif

      </form>

       @include('forms.patient.view.viewpatient')

         
      </div>
   
</div>


@endsection
@section('scripts')
    <script src="/js/mayus.js"></script>
@endsection