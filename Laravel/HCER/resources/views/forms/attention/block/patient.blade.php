  <div class="form-horizontal" >

          
 @include('forms.patient.block.initialdata')

<ul class="nav nav-tabs">
  <li class="active"><a href="#datosgenerales" data-toggle="tab" aria-expanded="true">Datos Generales</a></li>
  <li class=""><a href="#localizacion" data-toggle="tab" aria-expanded="false">Localizacion</a></li>
 
</ul>
<div id="myTabContent" class="tab-content">
  <div class="tab-pane fade active in" id="datosgenerales">
   @include('forms.patient.block.basicdata')
  </div>
  <div class="tab-pane fade" id="localizacion">
   @include('forms.patient.block.location')
  </div>
  
</div>

</div>

    
       
