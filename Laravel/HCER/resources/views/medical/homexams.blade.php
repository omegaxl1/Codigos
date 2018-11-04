@extends('layouts.app')

@section('content')
<div class="panel-body">
       
	 <form action="{{url('examenes/buscar')}}" class="navbar-form navbar-left" role="search">

        @include('forms.users.view.search')
      </form>

       @include('forms.medical.view.viewpatient')

         
      </div>


@endsection

@section('scripts')
    <script src="/js/mayus.js"></script>
@endsection