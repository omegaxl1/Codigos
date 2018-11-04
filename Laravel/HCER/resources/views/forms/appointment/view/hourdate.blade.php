<form class="form-horizontal" action="{{url('agendacitas/guardar')}}/{{($patientedit->id)}}/{{$viewuser->id}}" method="POST">
            {{ csrf_field() }}


 <div class="form-group">
        <label for="weight" class="col-lg-2 control-label">Hora y Fecha</label>
         <div class="col-lg-2">
        <input type="number" class="form-control" name="hour" value="{{old('hour')}}">
        </div>



         <div class="col-lg-2">
        <select class="form-control"  name="minutes" >
          <option>00</option>
          <option>15</option>
          <option>30</option>
        </select>
    </div>
     <div class="col-lg-2">
        <select class="form-control" name="timezone">
          <option>PM</option>
          <option>AM</option>
         
        </select>
    </div>
    <div class="col-lg-5 control-label">


	 <input type="date" name="dateturns"  value="{{ old('birthday', date('Y-m-d')) }}">
    </div>

  
       </div>


<div class="col-lg-5 control-label">
           <button id="ButtonHere" class="btn btn-primary">Agendar la Cita Medica </button>
       </div>

   </form>