 @extends('layouts.app')

@section('content')

<div class="panel-body">
@if (auth()->user()->is_recp)
 <form action="{{url('gestioncitas/busqueda')}}" class="navbar-form navbar-left" role="search">
 @endif
 @if (auth()->user()->is_enfemr)
  <form action="{{url('gestioncitasn/busqueda')}}" class="navbar-form navbar-left" role="search">
  @endif
        @include('forms.appointment.view.search')
      </form>

       

         
      </div>

       @include('forms.appointment.view.viewmedicdate')

       @endsection