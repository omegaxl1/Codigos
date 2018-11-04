<?php

namespace App\Http\Controllers\Attention;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateVitalSignRequest;
use App\rconsultation;
use App\vitalsign;
use App\exploregion;

class VitalSignController extends Controller
{

	public function insert ($id, CreateVitalSignRequest $request){
		
		$me = $request->user();

		 $start = date('Y-m-d')." 00:00:00";
         $end = date('Y-m-d')." 23:59:59";


		$rconsultation =  rconsultation::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->latest()->first();

		if($rconsultation == null)
		{
				return back()->with('notialert','Ficha de motivo de consulta no ha sido registrada');

		}

		
		$vitalsigns = vitalsign::create([
		 'heartrate'=>$request->input('heartrate'),
		 'head_circunference'=>$request->input('head_circunference'), 
		 'bloodpressure'=>$request->input('bloodpressure'),
		 'weight'=>$request->input('weight'),
		 'breathingfrequency'=>$request->input('breathingfrequency'),
		 'temperature'=>$request->input('temperature'), 
		 'oxygensaturation'=>$request->input('oxygensaturation'),
		 'size'=>$request->input('size'), 
		 'id_ims'=>$request->input('id_ims'),
		 'id_patient'=>$id, 
		 'id_user'=>$me->id
		]);


		$exploregions =exploregion::create([
			'id_head'=>$request->input('id_head'), 
			'id_eyes'=>$request->input('id_eyes'), 
			'id_ears'=>$request->input('id_ears'), 
			'id_nose'=>$request->input('id_nose'), 
			'id_mouthpharynx'=>$request->input('id_mouthpharynx'),
			'id_neck'=>$request->input('id_neck'),
			'id_cardiopulmonary'=>$request->input('id_cardiopulmonary'), 
			'id_nervousystem'=>$request->input('id_nervousystem'),
			'id_abdomen'=>$request->input('id_abdomen'),
			'id_extremities'=>$request->input('id_extremities'),
			'details'=>$request->input('details'), 
			'id_patient'=>$id, 
		 	'id_user'=>$me->id
		]);


		$idvital = vitalsign::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->where('id_patient',$id)->latest()->first();

		$idexplo = exploregion::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->where('id_patient',$id)->latest()->first();


		$rconupdate =$this->RconsultView($rconsultation->id);
		$rconupdate->id_vitalg= $idvital->id;
		$rconupdate->id_exploregions= $idexplo->id;
		$rconupdate->save();



		return redirect('pacientem/consulta/'.$id)->with('notification','ficha  de signos vitales y exploraciones por regiones registrada exitosamente.');
	}
    


    public function insertn ($id, CreateVitalSignRequest $request){
		
		$me = $request->user();

		 $start = date('Y-m-d')." 00:00:00";
         $end = date('Y-m-d')." 23:59:59";


		$rconsultation =  rconsultation::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->latest()->first();

		if($rconsultation == null)
		{
				return back()->with('notialert','Ficha de Motivo de Consulta  No ha sido Registrada');

		}

		
		$vitalsigns = vitalsign::create([
		 'heartrate'=>$request->input('heartrate'),
		 'head_circunference'=>$request->input('head_circunference'), 
		 'bloodpressure'=>$request->input('bloodpressure'),
		 'weight'=>$request->input('weight'),
		 'breathingfrequency'=>$request->input('breathingfrequency'),
		 'temperature'=>$request->input('temperature'), 
		 'oxygensaturation'=>$request->input('oxygensaturation'),
		 'size'=>$request->input('size'), 
		 'id_ims'=>$request->input('id_ims'),
		 'id_patient'=>$id, 
		 'id_user'=>$me->id
		]);


		$exploregions =exploregion::create([
			'id_head'=>$request->input('id_head'), 
			'id_eyes'=>$request->input('id_eyes'), 
			'id_ears'=>$request->input('id_ears'), 
			'id_nose'=>$request->input('id_nose'), 
			'id_mouthpharynx'=>$request->input('id_mouthpharynx'),
			'id_neck'=>$request->input('id_neck'),
			'id_cardiopulmonary'=>$request->input('id_cardiopulmonary'), 
			'id_nervousystem'=>$request->input('id_nervousystem'),
			'id_abdomen'=>$request->input('id_abdomen'),
			'id_extremities'=>$request->input('id_extremities'),
			'details'=>$request->input('details'), 
			'id_patient'=>$id, 
		 	'id_user'=>$me->id
		]);


		$idvital = vitalsign::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->where('id_patient',$id)->latest()->first();

		$idexplo = exploregion::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->where('id_patient',$id)->latest()->first();


		$rconupdate =$this->RconsultView($rconsultation->id);
		$rconupdate->id_vitalg= $idvital->id;
		$rconupdate->id_exploregions= $idexplo->id;
		$rconupdate->save();



		return redirect('pacienten/consulta/'.$id)->with('notification','ficha  de signos vitales y exploraciones por regiones registrada exitosamente.');
	}
    

    public function update($id, CreateVitalSignRequest $request)
    {
  
    	 $me = $request->user();

    	 $vitaledit =vitalsign::find($request->input('idvital'));
    	 $vitaledit->heartrate=$request->input('heartrate');
    	 $vitaledit->head_circunference =$request->input('head_circunference');
		 $vitaledit->bloodpressure=$request->input('bloodpressure');
		 $vitaledit->weight=$request->input('weight');
		 $vitaledit->breathingfrequency=$request->input('breathingfrequency');
		 $vitaledit->temperature=$request->input('temperature'); 
		 $vitaledit->oxygensaturation=$request->input('oxygensaturation');
		 $vitaledit->size=$request->input('size');
		 $vitaledit->id_ims=$request->input('id_ims');
		 $vitaledit->id_user=$me->id;
		 $vitaledit->save();



		 $exploedit = exploregion::find($request->input('idexplo'));
		 $exploedit->id_head=$request->input('id_head');  
		 $exploedit->id_eyes=$request->input('id_eyes');
		 $exploedit->id_ears=$request->input('id_ears');
		 $exploedit->id_nose=$request->input('id_nose'); 
		 $exploedit->id_mouthpharynx=$request->input('id_mouthpharynx');
		 $exploedit->id_neck=$request->input('id_neck');
		 $exploedit->id_cardiopulmonary=$request->input('id_cardiopulmonary'); 
		 $exploedit->id_nervousystem=$request->input('id_nervousystem');
		 $exploedit->id_abdomen=$request->input('id_abdomen');
		 $exploedit->id_extremities=$request->input('id_extremities');
		 $exploedit->details=$request->input('details');
		 $exploedit->id_user=$me->id;
		 $exploedit->save();



    	return redirect('pacientem/consulta/'.$exploedit->id_patient)->with('notification','“Ficha de Signos Vitales y Exploraciones por regiones Actualizada Correctamente”');
    }
 public function updaten($id, CreateVitalSignRequest $request)
    {
    	 $me = $request->user();

    	 $vitaledit =vitalsign::find($request->input('idvital'));
    	 $vitaledit->heartrate=$request->input('heartrate');
    	 $vitaledit->head_circunference =$request->input('head_circunference');
		 $vitaledit->bloodpressure=$request->input('bloodpressure');
		 $vitaledit->weight=$request->input('weight');
		 $vitaledit->breathingfrequency=$request->input('breathingfrequency');
		 $vitaledit->temperature=$request->input('temperature'); 
		 $vitaledit->oxygensaturation=$request->input('oxygensaturation');
		 $vitaledit->size=$request->input('size');
		 $vitaledit->id_ims=$request->input('id_ims');
		 $vitaledit->id_user=$me->id;
		 $vitaledit->save();



		 $exploedit = exploregion::find($request->input('idexplo'));
		 $exploedit->id_head=$request->input('id_head');
		 $exploedit->id_eyes=$request->input('id_eyes');
		 $exploedit->id_ears=$request->input('id_ears');
		 $exploedit->id_nose=$request->input('id_nose'); 
		 $exploedit->id_mouthpharynx=$request->input('id_mouthpharynx');
		 $exploedit->id_neck=$request->input('id_neck');
		 $exploedit->id_cardiopulmonary=$request->input('id_cardiopulmonary'); 
		 $exploedit->id_nervousystem=$request->input('id_nervousystem');
		 $exploedit->id_abdomen=$request->input('id_abdomen');
		 $exploedit->id_extremities=$request->input('id_extremities');
		 $exploedit->details=$request->input('details');
		 $exploedit->id_user=$me->id;
		 $exploedit->save();



    	return redirect('pacienten/consulta/'.$exploedit->id_patient)->with('notification','“Ficha de Signos Vitales y Exploraciones por regiones Actualizada Correctamente”');
    }

     private function RconsultView($id)

    {
      return rconsultation::find($id);
    }

}


