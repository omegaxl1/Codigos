 <form class="form-horizontal" action="{{url('pacientem/actualizar')}}/{{$patientedit->id}}" method="POST">
            {{ csrf_field() }}

          
             @include('forms.patient.edit.initialdata')

<ul class="nav nav-tabs">
  <li class="active"><a href="#datosgenerales" data-toggle="tab" aria-expanded="true">Datos Generales</a></li>
  <li class=""><a href="#localizacion" data-toggle="tab" aria-expanded="false">Localizacion</a></li>
 
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="datosgenerales">
   @include('forms.patient.edit.basicdata')
  </div>
  <div class="tab-pane fade" id="localizacion">
   @include('forms.patient.edit.location')
  </div>
  
</div>

     @include('forms.patient.edit.endata')
        </form>
