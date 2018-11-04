<?php

namespace App\Http\Controllers\Attention;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateResonMedicRequest;
use App\rconsultation;
use App\vitalsign;
use App\exploregion;
use App\evolution;
use App\diagnosi;


class ReasonConsulController extends Controller
{
    public function insert($id, CreateResonMedicRequest $request){

    	$me = $request->user();
      
    	$rconsultations = rconsultation::create([
    		'reason'=>$request->input('reason'), 
    		'id_patient'=>$id, 
			'id_user'=>$me->id
    	]);



    	
   		return redirect('pacientem/consulta/'.$id)->with('notification','motivo de consulta registrado exitosamente.');
    }

    public function update($id, CreateResonMedicRequest $request)
    {
         $me = $request->user();
         $rconsuledit =rconsultation::find($id);
         $rconsuledit->reason=$request->input('reason');
         $rconsuledit->save(); 

         return redirect('pacientem/consulta/'.$rconsuledit->id_patient)->with('notification','Ficha De motivo de consulta ha sido actualizado Correctamente');




    }
    public function delete ($id)
    {
    $rconsultation = rconsultation::find($id);
    
    $rconsultation->delete();

    
    if ($rconsultation->id_vitalg != null)
    {
    $vitalsign =vitalsign::find($rconsultation->id_vitalg);
    $vitalsign->delete();      
    }
    
    if($rconsultation->id_exploregions != null)
    {
    $exploregion = exploregion::find($rconsultation->id_exploregions);
    $exploregion->delete();   
    }
    
    if($rconsultation->id_diagnosi != null)
    {
    $diagnosi = diagnosi::find($rconsultation->id_diagnosi);
    $diagnosi->delete(); 
    }
    
    if($rconsultation->id_evolu != null)
    {
    $evolution = evolution::find($rconsultation->id_evolu);
     $evolution->delete();
    }
   

    return redirect('pacientea/consulta/'.$rconsultation->id_patient)->with('notialert','El motivo de consulta fue desactivado');
    }

    public function restore($id)
    {
        $rconsultation = rconsultation::withTrashed()->find($id);
        $rconsultation->restore();
       
        if ($rconsultation->id_vitalg != null)
        {
        $vitalsign =vitalsign::withTrashed()->find($rconsultation->id_vitalg);
        $vitalsign->restore();      
        }
        
        if($rconsultation->id_exploregions != null)
        {
        $exploregion = exploregion::withTrashed()->find($rconsultation->id_exploregions);
        $exploregion->restore();   
        }
        
        if($rconsultation->id_diagnosi != null)
        {
        $diagnosi = diagnosi::withTrashed()->find($rconsultation->id_diagnosi);
        $diagnosi->restore(); 
        }

        if($rconsultation->id_evolu != null)
        {
        $evolution = evolution::withTrashed()->find($rconsultation->id_evolu);
        $evolution->restore();
        }
        
         return redirect('pacientea/consulta/'.$rconsultation->id_patient)->with('notification','El motivo de consulta se ha habilitado correctamente');
    }

}
