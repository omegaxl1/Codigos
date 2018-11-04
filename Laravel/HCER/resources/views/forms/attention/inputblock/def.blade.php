	<div class="form-group">
          
       <label for="id_1" class="col-lg-4 control-label">Definitivo</label>
   </div>
	     <div class="form-group">
      
       
        <label for="id_1" class="col-lg-2 control-label">1</label>
         <div class="col-lg-9">
         <input disabled type="text" class="form-control" name="id_def_1" value="{{old('id_def_1',$viewdiag->def1_block->descrip)}}" >
        </div>
        </div>

      @if($viewdiag->id_def_2 != null)
      	<div class="form-group">
        <label for="id_2" class="col-lg-2 control-label">2</label>
        <div class="col-lg-9">
        <input disabled type="text" class="form-control" name="id_def_2" value="{{old('id_def_2',$viewdiag->def2_block->descrip)}}" >
        </div>

        </div>
     @endif

      @if($viewdiag->id_def_3 != null)
        <div class="form-group">
         <label for="id_3" class="col-lg-2 control-label">3</label>
        <div class="col-lg-9">
        <input disabled type="text" class="form-control" name="id_def_3" value="{{old('id_def_3',$viewdiag->def3_block->descrip)}}" >
        </div>

        </div>
       @endif