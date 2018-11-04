<form class="form-horizontal" action="{{url('pacientem/anamnesis')}}/{{($patientedit->id)}}" method="POST">
            {{ csrf_field() }}

        
          @include('forms.attention.input.anamnstart')

    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Personales No Patológicos </h3>
  </div>
  <div class="panel-body">
          <div style="width:50%; float:left;">
            @include('forms.attention.input.anamnsecond')
          </div>
        <div style="width:50%; float:left;">
          @include('forms.attention.input.anamnthird')
        </div>

      
  </div>  
        @include('forms.attention.input.button')

</form>
