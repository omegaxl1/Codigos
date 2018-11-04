 @if (session('notification'))
          
         <div class="alert alert-dismissible alert-success">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>{{ session('notification') }}</strong> 
        </div>
        @endif



        @if(session('notialert'))
         <div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <strong>{{ session('notialert') }}</strong> 
        </div>

        @endif
         @if (count($errors) > 0)

       
    @foreach ($errors->all() as $error)
     <div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
         <strong>{{ $error }}</strong> 
                 </div> 
                    @endforeach
  
       
            
        @endif