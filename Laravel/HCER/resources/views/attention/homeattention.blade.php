@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
      @include('forms.attention.notification.notificationfile')
      @if (auth()->user()->is_medic || auth()->user()->is_enfemr)
    <div class="panel-heading">Ficha de Atencion del   Paciente</div>

<ul class="nav nav-tabs">
  <li class="active"><a href="#paciente" data-toggle="tab">Datos del Paciente</a></li>
   @if (auth()->user()->is_medic)
   <li><a href="#motivoc" data-toggle="tab">Motivo de consulta</a></li>
  @endif
 @if (auth()->user()->is_medic || auth()->user()->is_enfemr)
  <li><a href="#anamnesis" data-toggle="tab">Anamnesis</a></li>
  @endif
 @if (auth()->user()->is_medic || auth()->user()->is_enfemr)
  <li><a href="#signosv" data-toggle="tab">Signos Vitales</a></li>
  @endif
  @if (auth()->user()->is_medic)
  <li><a href="#diagnostico" data-toggle="tab">Diagnóstico</a></li>
  @endif
   @if (auth()->user()->is_medic)
  <li><a href="#evolucion" data-toggle="tab">Evolución</a></li>
  @endif



</ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="paciente">
           <div class="panel-body">
          @if (auth()->user()->is_medic)
             @include('forms.attention.edit.patient')
             @endif
           @if (auth()->user()->is_enfemr)      
                @include('forms.attention.block.patient')
                @endif
          
          </div>

          </div>

            <div class="tab-pane fade" id="motivoc">
             <div class="panel-body">
              @if($editrconsult == null)
             @include('forms.attention.view.reasonconsul')
             @else 

                 @include('forms.attention.edit.reasonconsul')
                @endif
             </div>
      </div>



          <div class="tab-pane fade" id="anamnesis">
             <div class="panel-body">

            @if (auth()->user()->is_medic)
              @if ($editpatianam == null)
               
                  @include('forms.attention.view.anamnesis')

              @else 

                 @include('forms.attention.edit.anamnesis')
                @endif

             @endif

           @if (auth()->user()->is_enfemr)      
                @if ($editpatianam == null)
               
                <div class="alert alert-dismissible alert-warning">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
         <h4>Ficha Anamnesis</h4>
        <p>No se ha registrado ninguna ficha de Anamnesis en el paciente </p>
          </div>

              @else 

                 @include('forms.attention.block.anamnesis')
                @endif

                @endif
          
              
             </div>
          </div>
  <div class="tab-pane fade" id="signosv">
        <div class="panel-body">

          @if($editvital == null and $editexplo == null)
           @include('forms.attention.view.vitalsigns')

            @else 

                 @include('forms.attention.edit.vitalsigns')
                @endif
        </div>
  </div>
    
   <div class="tab-pane fade" id="diagnostico">

    <div class="panel-body">

    @if($editdiag == null)
     @include('forms.attention.view.diagnost')
      @else 

       @include('forms.attention.edit.diagnost')
      @endif


  </div>

</div>

 <div class="tab-pane fade" id="evolucion">
       <div class="panel-body">
        @if($editevo == null)
         @include('forms.attention.view.evolu')
         @else
          @include('forms.attention.edit.evolu')
         @endif
       </div>
</div>


 
          
          </div>
 @endif
@if (auth()->user()->is_admin || auth()->user()->is_medic )
<div class="panel panel-primary">
    <div class="panel-heading">Consultas Médicas</div>

    <div class="panel-body">
       

 @if (auth()->user()->is_medic)
  <form action="{{url('pacientem/buscar')}}/{{$patientedit->id}}" class="navbar-form navbar-left" role="search" method="POST">
  @endif
   @if (auth()->user()->is_admin)
  <form action="{{url('pacientea/buscar')}}/{{$patientedit->id}}" class="navbar-form navbar-left" role="search" method="POST">
    @endif
     {{ csrf_field() }}

        @include('forms.users.view.search')
      </form>

      @include('forms.attention.view.viewcon')

   

         
      </div>
   
</div>

@endif


@endsection


@section('scripts')
    <script src="/js/mayus.js"></script>
    <script src="/js/imc.js"></script>
@endsection