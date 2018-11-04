<div class="form-group">
   <label for="id_" class="col-lg-4 control-label">Presuntivo</label>
	</div>
  @if($viewdiag->id_pers_1 != null)
  		<div class="form-group">
       <label for="id_1" class="col-lg-2 control-label">1</label>
        <div class="col-lg-9">
        <input disabled type="text" class="form-control" name="id_pers_1" value="{{old('id_pers_1',$viewdiag->pers1_block->descrip)}}" >
        </div>
        </div>
  @endif
  @if($viewdiag->id_pers_2 != null)
    <div class="form-group">
         <label for="id_1" class="col-lg-2 control-label">2</label>
        <div class="col-lg-9">
        <input disabled type="text" class="form-control" name="id_pers_2" value="{{old('id_pers_2',$viewdiag->pers2_block->descrip)}}">
        </div>
        </div>
  @endif
    @if($viewdiag->id_pers_3 != null)
        <div class="form-group">
         <label for="id_1" class="col-lg-2 control-label">3</label>
        <div class="col-lg-9">
        <input disabled type="text" class="form-control" name="id_pers_3" value="{{old('id_pers_3',$viewdiag->pers3_block->descrip)}}">
        </div>
        </div>
  @endif