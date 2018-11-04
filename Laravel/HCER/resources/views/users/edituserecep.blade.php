@extends('layouts.app')

@section('content')

<div class="panel panel-primary">
    <div class="panel-heading">Editar  Recepcionista</div>

    <div class="panel-body">
         <form class="form-horizontal"  action="{{url('administrador/usuario/actualizar')}}/{{$usersedit->id}}" method="POST">
            {{ csrf_field() }}

       @include('forms.users.edit.initialdata')
        @include('forms.users.edit.endata')
          
        </form>
 </div>
</div>


<div class="panel panel-primary">
	  <div class="panel-heading">Recepcionista</div>

    <div class="panel-body">
       


  <form action="{{url('recepcionista/recep')}}" class="navbar-form navbar-left" role="search">
        @include('forms.users.view.search')
      </form>

          @include('forms.users.view.viewusers')
      </div>
   
</div>
@endsection
@section('scripts')
    <script src="/js/mayus.js"></script>
@endsection