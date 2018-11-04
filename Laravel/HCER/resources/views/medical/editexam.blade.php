@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">Registro de Especialidades</div>

    <div class="panel-body">
      @include('forms.medical.notification.notifications')
       

        <form class="form-horizontal" action="{{url('examenes/actualizar')}}/{{$exammedic->id}}" method="POST">
            {{ csrf_field() }}



          @include('forms.medical.edit.initialdata')


          
        </form>

  </div>
</div>
@endsection

@section('scripts')
    <script src="/js/mayus.js"></script>
@endsection