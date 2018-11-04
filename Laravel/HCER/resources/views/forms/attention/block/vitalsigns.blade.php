  <div class="form-horizontal" >

    <div class="panel-body">
          <div style="width:50%; float:left;">
          @include('forms.attention.inputblock.vitalsignstart')
          </div>

       
        <div style="width:50%; float:left;">
     
             @include('forms.attention.inputblock.vitalsignsecond')
        </div>

      
     

          </div>

    <div class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title">Exploraciones por Regiones </h3>
  </div>
  <div class="panel-body">
    <div class="form-group">
    @include('forms.attention.inputblock.header')
      
    </div>
          <div style="width:50%; float:left;">

      
     @include('forms.attention.inputblock.explo')

           
          </div>
        <div style="width:50%; float:left;">


    @include('forms.attention.inputblock.explo2')
          
        </div>
    @include('forms.attention.inputblock.detail')
      
  </div>  
       

</div>

  </div>


       