@extends('layouts.app')

@section('content')

<div class="panel-body">
       


	 <form action="{{url('cita/paciente')}}" class="navbar-form navbar-left" role="search">

        @include('forms.users.view.search')
      </form>

       @include('forms.appointment.view.viewpatient')

         
      </div>

@endsection
