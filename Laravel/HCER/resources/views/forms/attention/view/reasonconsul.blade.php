<form class="form-horizontal" action="{{url('pacientem/razonconsult')}}/{{($patientedit->id)}}" method="POST">
            {{ csrf_field() }}

        
          @include('forms.attention.input.reasonc')

   


        @include('forms.attention.input.buttonreason')

</form>
