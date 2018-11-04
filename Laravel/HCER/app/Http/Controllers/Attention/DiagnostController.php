<?php

namespace App\Http\Controllers\Attention;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateDiagnostiRequest;
use App\rconsultation;
use App\diagnosi;
use App\vitalsign;
use App\exploregion;
use App\Cis10;
class DiagnostController extends Controller
{
    public function insert($id, CreateDiagnostiRequest  $request){
     // dd($request->all()) ;
    	$me = $request->user();
    	 $start = date('Y-m-d')." 00:00:00";
         $end = date('Y-m-d')." 23:59:59";

    	$rconsult=rconsultation::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->where('id_user',$me->id)->latest()->first();

    	if($rconsult == null)
    	{
    		return back()->with('notialert','Ficha de Motivo de Registro No ha sido Ingresada');

    	}
     $idvital = vitalsign::find($rconsult->id_vitalg);

     $idexplo = exploregion::find($rconsult->id_exploregions);


     if($idvital == null &&  $idexplo ==null)
     {
        return back()->with('notialert','Ficha de Sginos vitales no ha sido registrada');
     }

        $per1=Cis10::where('descrip',$request->input('id_pers_1'))->first();
        $per2=Cis10::where('descrip',$request->input('id_pers_2'))->first();
        $per3=Cis10::where('descrip',$request->input('id_pers_3'))->first();
        $def1=Cis10::where('descrip',$request->input('id_def_1'))->first();
        $def2=Cis10::where('descrip',$request->input('id_def_2'))->first();
        $def3=Cis10::where('descrip',$request->input('id_def_3'))->first();
       if ($per1 == null)
       {
        $per1 = null;
       }
       else
       {
        $per1 = $per1->id;
       }
       if ($per2 == null)
       {
        $per2 = null;
       }
       else
       {
        $per2 = $per2->id;
       }
       if($per3 == null)
       {
        $per3 = null;
       }
      else
      {
        $per3 = $per3->id;
      }
      if ($def1 ==null)
      {
        $def1 = null;
      }
      else
      {
         $def1 = $def1->id;
      }
      if ($def2 == null)
      {
        $def2 = null;
      }
      else
      {
        $def2 = $def2->id;
      }
      if ($def3 == null)
     {
        $def3 = null;
     }
     else
     {
         $def3 = $def3->id;
     }
        
       



    	$diagnos = diagnosi::create([
            'id_pers_1'=>$per1,
            'id_pers_2'=>$per2,
            'id_pers_3'=>$per3, 
            'id_def_1'=>$def1,
            'id_def_2'=>$def2,
            'id_def_3'=>$def3, 
    		'treatment'=>$request->input('treatment'), 
    		'recipe'=>$request->input('recipe'),
    		'instructions'=>$request->input('instructions'), 
    		'id_patient'=>$id, 
			'id_user'=>$me->id

    	]);

    	$idiagnos = diagnosi::where('id_patient',$id)->where('id_user',$me->id)->latest()->first();


    	$idrconsult=rconsultation::find($rconsult->id);
    	$idrconsult->id_diagnosi=$idiagnos->id;
    	$idrconsult->save();



    	return redirect('pacientem/consulta/'.$id)->with('notification','Ficha De Diagnóstico ha sido Registrada Correctamente');

     


     }

      public function update($id, CreateDiagnostiRequest $request)
    {
         $me = $request->user();
        $per1=Cis10::where('descrip',$request->input('id_pers_1'))->first();
        $per2=Cis10::where('descrip',$request->input('id_pers_2'))->first();
        $per3=Cis10::where('descrip',$request->input('id_pers_3'))->first();
        $def1=Cis10::where('descrip',$request->input('id_def_1'))->first();
        $def2=Cis10::where('descrip',$request->input('id_def_2'))->first();
        $def3=Cis10::where('descrip',$request->input('id_def_3'))->first();

         if ($per1 == null)
       {
        $per1 = null;
       }
       else
       {
        $per1 = $per1->id;
       }
       if ($per2 == null)
       {
        $per2 = null;
       }
       else
       {
        $per2 = $per2->id;
       }
       if($per3 == null)
       {
        $per3 = null;
       }
      else
      {
        $per3 = $per3->id;
      }
      if ($def1 ==null)
      {
        $def1 = null;
      }
      else
      {
         $def1 = $def1->id;
      }
      if ($def2 == null)
      {
        $def2 = null;
      }
      else
      {
        $def2 = $def2->id;
      }
      if ($def3 == null)
     {
        $def3 = null;
     }
     else
     {
         $def3 = $def3->id;
     }

         $diagnoedit =diagnosi::find($id);
         $diagnoedit->id_pers_1=$per1;
         $diagnoedit->id_pers_2=$per2;
         $diagnoedit->id_pers_3=$per3;
         $diagnoedit->id_def_1=$def1;
         $diagnoedit->id_def_2=$def2;
         $diagnoedit->id_def_3=$def3;
         $diagnoedit->treatment=$request->input('treatment');
         $diagnoedit->recipe=$request->input('recipe');
         $diagnoedit->instructions=$request->input('instructions');
         $diagnoedit->id_user=$me->id;
         $diagnoedit->save(); 

        return redirect('pacientem/consulta/'.$diagnoedit->id_patient)->with('notification','Ficha De Diagnóstico ha sido Actualizada Correctamente');




    }



}
