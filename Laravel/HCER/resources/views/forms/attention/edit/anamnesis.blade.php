<form class="form-horizontal" action="{{url('pacientem/anamnesisedit')}}/{{$editpatianam->id}}" method="POST">
            {{ csrf_field() }}

        
          @include('forms.attention.inputedit.anamnstart')

    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Personales No Patológicos </h3>
  </div>
  <div class="panel-body">
          <div style="width:50%; float:left;">
            @include('forms.attention.inputedit.anamnsecond')
          </div>
        <div style="width:50%; float:left;">
          @include('forms.attention.inputedit.anamnthird')
        </div>

      
  </div>  
        @include('forms.attention.inputedit.button')

</form>
