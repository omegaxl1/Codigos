<?php

namespace App\Http\Controllers\Attention;

use Illuminate\Http\Request;
use App\Http\Requests\CreateAnamnesisMedicRequest;
use App\Http\Requests\CreateAnamnesisMedicUpdateRequest;
use App\Http\Controllers\Controller;
use App\patientanamne;

class AnamnesisController extends Controller
{
    

public function insert($id, CreateAnamnesisMedicRequest $request){


   

	$me = $request->user();

	$anamnesis = patientanamne::create([

        'allergies'=> $request->input('allergies'),
        'p_pathologies'=>$request->input('p_pathologies'), 
        'f_pathologies'=>$request->input('f_pathologies'),
        'surgical'=>$request->input('surgical'),
        'alcohol'=>$request->input('alcohol'),
        'smoking'=>$request->input('smoking'),
        'drugs'=>$request->input('drugs'),
        'inmunizaciones'=>$request->input('inmunizaciones'),
        'others'=>$request->input('others'),
        'id_patient'=>$id,
        'id_user'=>$me->id


	]);
	return redirect('pacientem/consulta/'.$id)->with('notification','ficha  de anamnesis registrada exitosamente');


}


 public function update($id, CreateAnamnesisMedicUpdateRequest $request){
        $me = $request->user();
        $editpatianames = patientanamne::find($id);
        $editpatianames->allergies= $request->input('allergies');
        $editpatianames->p_pathologies=$request->input('p_pathologies');
        $editpatianames->f_pathologies=$request->input('f_pathologies');
        $editpatianames->surgical=$request->input('surgical');
        $editpatianames->alcohol=$request->input('alcohol');
        $editpatianames->smoking=$request->input('smoking');
        $editpatianames->drugs=$request->input('drugs');
        $editpatianames->inmunizaciones=$request->input('inmunizaciones');
        $editpatianames->others=$request->input('others');
        $editpatianames->id_user=$me->id;
        $editpatianames->save();


      
         return redirect('pacientem/consulta/'.$editpatianames->id_patient)->with('notification','ficha de anamnesis actualizada correctamente');
    }




   
}
