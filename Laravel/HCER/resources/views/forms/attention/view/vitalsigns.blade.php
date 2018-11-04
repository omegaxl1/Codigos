   @if (auth()->user()->is_medic)
    <form class="form-horizontal" action="{{url('pacientem/signosvitales')}}/{{($patientedit->id)}}" method="POST">
  @endif
  @if (auth()->user()->is_enfemr)
    <form class="form-horizontal" action="{{url('pacienten/signosvitales')}}/{{($patientedit->id)}}" method="POST">
  @endif
            {{ csrf_field() }}

    <div class="panel-body">
          <div style="width:50%; float:left;">
          @include('forms.attention.input.vitalsignstart')
          </div>

       
        <div style="width:50%; float:left;">
     
             @include('forms.attention.input.vitalsignsecond')
        </div>

      
     

          </div>
         

    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Exploraciones por Regiones </h3>
  </div>
  <div class="panel-body">
    <div class="form-group">
    @include('forms.attention.input.header')
      
    </div>
          <div style="width:50%; float:left;">

      
     @include('forms.attention.input.explo')

           
          </div>
        <div style="width:50%; float:left;">


    @include('forms.attention.input.explo2')
          
        </div>
    @include('forms.attention.input.detail')
      
  </div>  
        @include('forms.attention.input.buttonvital')

</div>

</form>
       