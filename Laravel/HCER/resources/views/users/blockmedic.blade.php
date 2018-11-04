@extends('layouts.app')

@section('content')

<div class="panel panel-primary">
    <div class="panel-heading">Editar  Medico</div>

    <div class="panel-body">
         <form class="form-horizontal"  action="{{url('medico/usuario/actualizar')}}/{{$usersedit->id}}" method="POST">
            {{ csrf_field() }}

       @include('forms.users.block.initialdata')
       @include('forms.users.block.specialties')
  
          
        </form>

       </div>
</div>



@endsection

