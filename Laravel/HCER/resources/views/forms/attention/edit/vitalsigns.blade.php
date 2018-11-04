      @if (auth()->user()->is_medic)
    <form class="form-horizontal" action="{{url('pacientem/signosvitalesedit')}}/{{($patientedit->id)}}" method="POST">
        @endif
  @if (auth()->user()->is_enfemr)
  <form class="form-horizontal" action="{{url('pacienten/signosvitalesedit')}}/{{($patientedit->id)}}" method="POST">
      @endif
            {{ csrf_field() }}

    <div class="panel-body">
          <div style="width:50%; float:left;">
          @include('forms.attention.inputedit.vitalsignstart')
          </div>

       
        <div style="width:50%; float:left;">
     
             @include('forms.attention.inputedit.vitalsignsecond')
        </div>

      
     

          </div>


     
 
        
         

    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Exploraciones por Regiones </h3>
  </div>
  <div class="panel-body">
    <div class="form-group">
    @include('forms.attention.inputedit.header')
      
    </div>
          <div style="width:50%; float:left;">

      
     @include('forms.attention.inputedit.explo')

           
          </div>
        <div style="width:50%; float:left;">


    @include('forms.attention.inputedit.explo2')
          
        </div>
    @include('forms.attention.inputedit.detail')
      
  </div>  
        @include('forms.attention.inputedit.buttonvital')

</div>

</form>
       