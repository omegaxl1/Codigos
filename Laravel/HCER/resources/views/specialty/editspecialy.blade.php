@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">Editar  Especialidades</div>

    <div class="panel-body">
       
         @include('forms.specialty.notification.notifications')
       

        <form class="form-horizontal" action="{{url('espacialidades/actualizar')}}/{{$editspecialty->id}}" method="POST">
            {{ csrf_field() }}



             @include('forms.specialty.edit.initialdata')

          
        </form>

  </div>
</div>


<div class="panel panel-primary">
    <div class="panel-heading">Especialidades</div>

    <div class="panel-body">
       


  <form action="{{url('espacialidades/buscar')}}" class="navbar-form navbar-left" role="search">
        @include('forms.users.view.search')
      </form>
    @include('forms.specialty.view.viewspecialty')
        
      </div>
   
</div>


@endsection
@section('scripts')
    <script src="/js/mayus.js"></script>
@endsection