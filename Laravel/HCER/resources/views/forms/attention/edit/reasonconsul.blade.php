<form class="form-horizontal" action="{{url('pacientem/razonconsultaedit')}}/{{($editrconsult->id)}}" method="POST">
            {{ csrf_field() }}

        
          @include('forms.attention.inputedit.reasonc')

   


        @include('forms.attention.inputedit.buttonreason')

</form>
