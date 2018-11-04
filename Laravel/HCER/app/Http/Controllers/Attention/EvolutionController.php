<?php

namespace App\Http\Controllers\Attention;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEvolutionRequest;
use App\rconsultation;
use App\evolution;

class EvolutionController extends Controller
{
      public function insert($id, CreateEvolutionRequest $request){

    	$me = $request->user();
    	 $start = date('Y-m-d')." 00:00:00";
        $end = date('Y-m-d')." 23:59:59";



    	$rconsult=rconsultation::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->where('id_user',$me->id)->latest()->first();


    	if ($rconsult == null)
    	{

            
    		$idrconsult=rconsultation::where('id_patient',$id)->where('id_user',$me->id)->latest()->first();
    	}
      else 
      {
        $idnum = $rconsult->id;
        $idrconsult=rconsultation::where('id','<',$idnum)->where('id_user',$me->id)->latest()->first();

        
      }
   

    	if($idrconsult == null)
    	{
    		return back()->with('notialert','No Exsisten Motivos de consulta Anteriores');

    	}
      if ($idrconsult->id_user != $me->id )
      {
        return back()->with('notialert','No Exsisten Motivos de consulta Anteriores');
      }
      if ($idrconsult->id_evolu != null)
      {
        return back()->with('notialert','No Exsisten Motivos de consulta Anteriores');
      }

    	$evolut = evolution::create([
    		'devolution'=>$request->input('devolution'), 
    		'id_patient'=>$id, 
			  'id_user'=>$me->id

    	]);

    	$idevolut = evolution::where('id_patient',$id)->where('id_user',$me->id)->latest()->first();


    	$consult=rconsultation::find($idrconsult->id);
    	$consult->id_evolu=$idevolut->id;
    	$consult->save();



    	return redirect('pacientem/consulta/'.$id)->with('notification','Ficha De evolución ha sido Registrada Correctamente');



    	


     }

      public function update($id, CreateEvolutionRequest $request)
    {
         $me = $request->user();
         $evoedit =evolution::find($id);
         $evoedit->devolution=$request->input('devolution');
         $evoedit->save(); 

         return redirect('pacientem/consulta/'.$evoedit->id_patient)->with('notification','Ficha De evolución ha sido Actualizado Correctamente');




    }

     
}
