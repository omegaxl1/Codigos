@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">Registro de Especialidades</div>

    <div class="panel-body">
      @include('forms.medical.notification.notifications')
       

        <form class="form-horizontal" action="{{url('examenes/ingreso')}}/{{$patient->id}}" method="POST">
            {{ csrf_field() }}



          @include('forms.medical.view.initialdata')


          
        </form>

  </div>
</div>

<div class="panel panel-primary">
	  <div class="panel-heading">Exámenes médicos</div>

    <div class="panel-body">
       


	<form action="{{url('examenes/ver/buscar')}}/{{$patient->id}}" class="navbar-form navbar-left" role="search">
        @include('forms.users.view.search')
      </form>
   
      @include('forms.medical.view.viewexam')
      </div>
   
</div>


@endsection

@section('scripts')
    <script src="/js/mayus.js"></script>
@endsection