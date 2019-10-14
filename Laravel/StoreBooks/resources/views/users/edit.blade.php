@extends('layouts.app')

@section('content')
<div class="panel panel-primary">


    <div class="panel-body text-center">
    <p>Usuarios</p>
    @if($errors->any())

    @foreach ($errors->all() as $error)

    <p class="alert alert-danger">{{$error}}</p>
    @endforeach

    @endif
    <form class="form-horizontal"  action="{{$action}}" method="POST">
        {{ csrf_field() }}

       @include('forms.users.edit.initialdata')

       @include('forms.users.edit.endata')
    </form>
    </div>

    <form action="" class="navbar-form navbar-left" role="search">

      </form>

          @include('forms.users.view.list')
      </div>




</div>
@endsection
