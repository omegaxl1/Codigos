	
	  <form class="form-horizontal" action="{{url('pacientem/diagnostico')}}/{{($patientedit->id)}}" method="POST">
            {{ csrf_field() }}
              
      <div style="width:50%; float:left;">
       @include('forms.attention.input.def')
      </div>




<div style="width:50%; float:left;">
	 @include('forms.attention.input.pre')
</div>
 

 <datalist id="cis10">

 	 @foreach ($cis10s as $cis10)
	 <option label="{{$cis10->cod_4}}">{{$cis10->descrip}}</option>
        
         @endforeach
        </select>
  
 
  
</datalist>
        
      @include('forms.attention.input.diagnostart')
	  @include('forms.attention.input.buttondiag')


      

          </form>
