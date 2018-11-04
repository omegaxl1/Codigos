@extends('layouts.app')

@section('content')

<div class="panel panel-primary">
	  <div class="panel-heading">Listado de Pacientes</div>

    <div class="panel-body">
       


	   <form action="{{url('pdf/buscar')}}" class="navbar-form navbar-left" role="search">
        @include('forms.users.view.search')
      </form>
   	 @include('forms.pdf.view.viewpatient')
        
      </div>
   
</div>
@endsection