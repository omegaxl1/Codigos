@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">Registro de administradores</div>

    <div class="panel-body">
       
       

        <form class="form-horizontal" action="{{url('administrador/ingreso')}}" method="POST">
            {{ csrf_field() }}

           @include('forms.users.view.initialdata')
       
           @include('forms.users.view.endata')
        </form>

  </div>
</div>


<div class="panel panel-primary">
	  <div class="panel-heading">Administradores</div>

    <div class="panel-body">
       


	<form action="{{url('administrador/admin')}}" class="navbar-form navbar-left" role="search">
        @include('forms.users.view.search')
      </form>

          @include('forms.users.view.viewusers')
      </div>
   
</div>


@endsection
@section('scripts')
    <script src="/js/mayus.js"></script>
@endsection