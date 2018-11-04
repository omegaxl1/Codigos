	
	  <form class="form-horizontal" action="{{url('pacientem/diagnosticoedit')}}/{{($editdiag->id)}}" method="POST">
            {{ csrf_field() }}
              
         <div style="width:50%; float:left;">
       @include('forms.attention.inputedit.def')
      </div>




<div style="width:50%; float:left;">
	 @include('forms.attention.inputedit.pre')
</div>
 

 <datalist id="cis10">

 	 @foreach ($cis10s as $cis10)
	 <option label="{{$cis10->cod_4}}">{{$cis10->descrip}}</option>
        
         @endforeach
        </select>
  
 
  
</datalist>
        
        
      @include('forms.attention.inputedit.diagnostart')

	  @include('forms.attention.inputedit.buttondiag')


      

          </form>
