@extends('layouts.app')

@section('content')

<div class="panel panel-primary">
   @include('forms.attention.notification.notificationfile')
  <div class="panel-heading">
    <h3 class="panel-title">Busqueda de citas por fecha</h3>
  </div>
 <div class="panel-body">
@if (auth()->user()->is_medic)
 <form action="{{url('cita/busquedam')}}/{{$user->id}}" class="navbar-form navbar-left" role="search">
 @endif  
@if (auth()->user()->is_enfemr)
 <form action="{{url('gestioncitasn/ver/medico/citas/busqueda')}}/{{$user->id}}" class="navbar-form navbar-left" role="search">
 @endif  
 @if (auth()->user()->is_recp)
 <form action="{{url('gestioncitas/ver/medico/citas/busqueda')}}/{{$user->id}}" class="navbar-form navbar-left" role="search">
  @endif  

	 @include('forms.appointment.view.hour');
</form>

</div>

</div>

      
<div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Citas Médicas</h3>
  </div>
  <div class="panel-body">
   @include('forms.appointment.view.viewdatemedicpatient')
  </div>
</div>


@endsection