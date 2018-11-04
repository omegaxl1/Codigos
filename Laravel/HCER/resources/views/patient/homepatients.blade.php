@extends('layouts.app')

@section('content')
  @include('forms.patient.notification.notifications')
@if (auth()->user()->is_medic || auth()->user()->is_recp )
<div class="panel panel-primary">
    <div class="panel-heading">Registro de  Pacientes</div>

    <div class="panel-body">
   
       
  @if (auth()->user()->is_medic)
        <form class="form-horizontal" action="{{url('pacientem/ingreso')}}" method="POST">
            {{ csrf_field() }}
  @endif

    @if (auth()->user()->is_recp)
        <form class="form-horizontal" action="{{url('pacienter/ingreso')}}" method="POST">
            {{ csrf_field() }}
  @endif




          
             @include('forms.patient.view.initialdata')

<ul class="nav nav-tabs">
   @if (auth()->user()->is_medic)
  <li class=""><a href="#datosgenerales" data-toggle="tab" aria-expanded="true">Datos Generales</a></li>
  @endif

  <li class="active"><a href="#localizacion" data-toggle="tab" aria-expanded="false">Localizacion</a></li>
 
</ul>

<div id="myTabContent" class="tab-content">
    @if (auth()->user()->is_medic)
  <div class="tab-pane fade " id="datosgenerales">
   @include('forms.patient.view.basicdata')
  </div>
   @endif
 
  <div class="tab-pane fade active in" id="localizacion">
   @include('forms.patient.view.location')
  </div>
  
</div>

     @include('forms.patient.view.endata')
        </form>

  </div>
</div>
@endif


<div class="panel panel-primary">
	  <div class="panel-heading">Pacientes</div>

    <div class="panel-body">
       

  @if (auth()->user()->is_admin)
	 <form action="{{url('pacientea/pacient')}}" class="navbar-form navbar-left" role="search">

  @include('forms.users.view.search')

@endif
  @if (auth()->user()->is_medic)
   <form action="{{url('pacientem/pacient')}}" class="navbar-form navbar-left" role="search">

        @include('forms.users.view.search')
    @endif

    @if (auth()->user()->is_enfemr)
      <form action="{{url('pacienten/pacient')}}" class="navbar-form navbar-left" role="search">

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