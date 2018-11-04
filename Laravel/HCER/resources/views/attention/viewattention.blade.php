@extends('layouts.app')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">Vista de la Ficha de Atencion del   Paciente</div>

<ul class="nav nav-tabs">
  <li class="active"><a href="#paciente" data-toggle="tab">Datos del Paciente</a></li>
  <li><a href="#motivoc" data-toggle="tab">Motivo de consulta</a></li>
  <li><a href="#anamnesis" data-toggle="tab">Anamnesis</a></li>
  <li><a href="#signosv" data-toggle="tab">Signos Vitales</a></li>
  
  <li><a href="#diagnostico" data-toggle="tab">Diagnóstico</a></li>
  <li><a href="#evolucion" data-toggle="tab">Evolución</a></li>



</ul>
          <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="paciente">
           <div class="panel-body">


                  
                @include('forms.attention.block.patient')
               
          
          </div>

          </div>

        <div class="tab-pane fade" id="motivoc">
             <div class="panel-body">
             
           @if($viewrconsul == null)

           <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">No se ha Registrado la ficha de Motivo de Consulta</h3>
              </div>
             
            </div>

           @else

            @include('forms.attention.block.reasonconsul')

           @endif

            
             </div>
      </div>


          <div class="tab-pane fade" id="anamnesis">
             <div class="panel-body">


             
                
               @if ($viewpatianam == null)
              <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">No se ha Registrado la anamnesis del paciente</h3>
              </div>
             
            </div>

              @else 

                 @include('forms.attention.block.anamnesis')
                @endif

             
             </div>
          </div>

            <div class="tab-pane fade" id="signosv">
        <div class="panel-body">

          @if($viewvital == null )
           <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">No se ha Registrado la ficha de Signos vitales</h3>
              </div>
             
            </div>

          @else
              @include('forms.attention.block.vitalsigns')
           @endif
        </div>
  </div>
  
     <div class="tab-pane fade" id="diagnostico">

    <div class="panel-body">
      @if($viewdiag == null)

      <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">No se ha Registrado la ficha de Diagnóstico de la Consulta</h3>
              </div>
             
            </div>
    @else
   
      @include('forms.attention.block.diagnost')
     
      
           @endif
  </div>

</div>

<div class="tab-pane fade" id="evolucion">
       <div class="panel-body">
     
          @if($viewevol == null)

        <div class="panel panel-danger">
              <div class="panel-heading">
                <h3 class="panel-title">No se ha Registrado la ficha de evolución de la Consulta</h3>
              </div>
             
            </div>
         @else
      
     
         @include('forms.attention.block.evolu')
      
           @endif
        
       </div>
          
          </div>


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
    <script src="/js/imc.js"></script>
@endsection