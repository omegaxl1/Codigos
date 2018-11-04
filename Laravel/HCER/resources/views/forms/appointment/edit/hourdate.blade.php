<form class="form-horizontal" action="{{url('/gestioncitas/ver/paciente/citas/actualizar')}}/{{$turnmedics->id}}" method="POST">
            {{ csrf_field() }}


 <div class="form-group">
        <label for="weight" class="col-lg-2 control-label">Hora y Fecha</label>
         <div class="col-lg-2">
        <input type="number" class="form-control" name="hour" value="{{old('hour',$turnmedics->hour)}}" disabled>
        </div>



         <div class="col-lg-2">
         <input type="number" class="form-control" name="minutes" value="{{old('minutes',$turnmedics->minutes)}}" disabled>
    </div>
     <div class="col-lg-2">
         <select disabled class="form-control" name="timezone">


          <option @if($turnmedics->timezone == 'PM') selected @endif > PM</option>
          
          <option @if($turnmedics->timezone == 'AM') selected @endif > AM</option>
        </select>
    </div>
    <div class="col-lg-5 control-label">


	 <input type="date" name="dateturns"  value="{{ $turnmedics->dateturns }}" disabled>
    </div>
  <div class="col-lg-5 control-label">

     <select name="id_statusdate" class="form-control">
     @foreach ($statusdates as $statusdate)

          <option value="{{$statusdate->id}}" @if($statusdate->id == $turnmedics->id_status) selected @endif >{{$statusdate->status}}</option>
     @endforeach

     
        </select>
   
    </div>

  
       </div>


<div class="col-lg-5 control-label">
           <button class="btn btn-primary">Actualizar  Cita Medica </button>
       </div>

   </form>