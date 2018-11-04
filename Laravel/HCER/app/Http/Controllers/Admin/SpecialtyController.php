<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateSpecialtyRequest;
use App\Specialty;

class SpecialtyController extends Controller
{

	public function view()
	{
		$specialties = Specialty::latest()->paginate(5);
		return view('specialty.homespecialy',['specialties'=>$specialties]);
	}

	 public function insert(CreateSpecialtyRequest $request)
   {

   		//dd($request->all()) ;

   	$specialty = Specialty::create([
   		 'n_specialties'=>$request->input('n_specialties'),
   		 'detail' =>$request->input('detail')
   	]);
   	return back()->with('notification','Se ha registrado  correctamente la especialidad');

   }

   public function edit($id){
   	$editspecialty =Specialty::find($id);
   	$specialties = Specialty::latest()->paginate(5);

   	return view('specialty.editspecialy',['editspecialty'=>$editspecialty,'specialties'=>$specialties]);

   }

   public function seach(Request $request)
   {
    $search = $request->input('buscar');

    $specialties =  $this->SeachSp($search);

	return view('specialty.homespecialy',['specialties'=>$specialties]);

   }
   public function update($id, Request $request)
   {
   	$specialties = Specialty::find($id);
      $nspecialties = $specialties->n_specialties;
      $cspecialties = $request->input('n_specialties');
      $queryspecialties = $this->SeachSpecialty($cspecialties);
      $vespecialties = false;
     
      if($queryspecialties == null)
      {
         $vespecialties = true;

      }
       if($nspecialties == $cspecialties)
      {
         $vespecialties = true;
      }
      if($vespecialties == false)
      {

         return back()->with('notialert','Ya se ha registrado  esta especialidad');

      }


   	$specialties->n_specialties=$request->input('n_specialties');
   	$specialties->detail=$request->input('detail');
   	$specialties->save();

   	return back()->with('notification','Se ha modificado el registro de la especialidad correctamente');
   }

   private function SeachSpecialty($specialty)
   {
      return Specialty::specialtyn($specialty)->first();
   }

   private function SeachSp($specialty)
   {
      return Specialty::sp($specialty)->paginate(5);
   }

  
}
