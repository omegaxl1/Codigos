<?php

namespace App\Http\Controllers\Attention;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\gender;
use App\patient;
use App\contact;
use App\bloodtype;
use App\im;
use App\cpsp;
use App\rconsultation;
use App\diagnosi;
use App\Cis10;
use App\patientanamne;
use App\vitalsign;
use App\exploregion;
use App\evolution;

class FileController extends Controller
{


	  public function view($id, Request $request){
        
        $me = $request->user();
        $patientedit = $this->PatientView($id);
        $genders = gender::all(); 
	    $contacts = contact::all();
		$bloodtypes = bloodtype::all();
        $ims = im::all();
        $cpsps = cpsp::all();
        $cis10s= Cis10::all();
        $start = date('Y-m-d')." 00:00:00";
        $end = date('Y-m-d')." 23:59:59";


        $editpatianam =patientanamne::where('id_patient',$id)->latest()->first();

        $editvital = vitalsign::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->latest()->first();

        $editexplo = exploregion::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->latest()->first();

        $editrconsult = rconsultation::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->where('id_user',$me->id)->latest()->first();

        $editdiag = diagnosi::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->where('id_user',$me->id)->latest()->first();

       //ci10 defintivos y pres
        if ($editdiag == null)
        {
            $editdef1 = null;
            $editdef2 = null;
            $editdef3 = null;
            $editpers1 = null;
            $editpers2 = null;
            $editpers3 = null;

        }
        else
        {
            $editdef1 = Cis10::find($editdiag->id_def_1); 
            if ($editdef1 == null)
            {
                $editdef1 = null;
            }
            else
            {
            $editdef1  =  $editdef1->descrip; 

            }
            $editdef2 = Cis10::find($editdiag->id_def_2); 
            if ($editdef2 == null)
            {
                $editdef2 = null;
            }
            else
            {
            $editdef2  =  $editdef2->descrip; 

            }
            $editdef3 = Cis10::find($editdiag->id_def_3); 
            if ($editdef3 == null)
            {
                $editdef3 = null;
            }
            else
            {
            $editdef3  =  $editdef3->descrip; 

            }
             
            $editpers1 = Cis10::find($editdiag->id_pers_1); 
            if ($editpers1 == null)
            {
                $editpers1 = null;
            }
            else
            {
            $editpers1  =  $editpers1->descrip; 

            }

            $editpers2 = Cis10::find($editdiag->id_pers_2); 
            if ($editpers2 == null)
            {
                $editpers2 = null;
            }
            else
            {
            $editpers2  =  $editpers2->descrip; 

            }

            $editpers3 = Cis10::find($editdiag->id_pers_3); 
            if ($editpers3 == null)
            {
                $editpers3 = null;
            }
            else
            {
            $editpers3 =  $editpers3->descrip; 

            }
        }

        
        

        $editevo = evolution::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->where('id_user',$me->id)->latest()->first();

        $rcons = rconsultation::where('id_patient',$id)->latest()->paginate(5);

        $rconsadmin = rconsultation::withTrashed()->where('id_patient',$id)->latest()->paginate(5);


        	return view('attention.homeattention',['patientedit'=>$patientedit, 'genders'=>$genders,'contacts'=>$contacts , 'bloodtypes'=>$bloodtypes,'ims'=>$ims,'cpsps'=>$cpsps,'cis10s'=>$cis10s, 'rcons'=>$rcons,'editpatianam'=>$editpatianam,'viewpatianam'=>$editpatianam,'editvital'=>$editvital,'editexplo'=>$editexplo,'editrconsult'=>$editrconsult,'editdiag'=>$editdiag,'editdef1'=>$editdef1,'editdef2'=>$editdef2,'editdef3'=>$editdef3,'editpers1'=>$editpers1,'editpers2'=>$editpers2,'editpers3'=>$editpers3,'editevo'=>$editevo,'rconsadmin'=>$rconsadmin]);
    }


      public function searchexp($id, Request $request){

        $me = $request->user();
        $search = $request->input('buscar');
        $patientedit = $this->PatientView($id);
        $genders = gender::all(); 
        $contacts = contact::all();
        $bloodtypes = bloodtype::all();
        $ims = im::all();
        $cpsps = cpsp::all();
        $cis10s= Cis10::all();
        $start = date('Y-m-d')." 00:00:00";
        $end = date('Y-m-d')." 23:59:59";




        $editpatianam =patientanamne::where('id_patient',$id)->latest()->first();

        $editvital = vitalsign::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->latest()->first();

        $editexplo = exploregion::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->latest()->first();

        $editrconsult = rconsultation::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->where('id_user',$me->id)->latest()->first();

        $editdiag = diagnosi::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->where('id_user',$me->id)->latest()->first();
        
        //ci10 defintivos y pres
        if ($editdiag == null)
        {
            $editdef1 = null;
            $editdef2 = null;
            $editdef3 = null;
            $editpers1 = null;
            $editpers2 = null;
            $editpers3 = null;

        }
        else
        {
            $editdef1 = Cis10::find($editdiag->id_def_1); 
            if ($editdef1 == null)
            {
                $editdef1 = null;
            }
            else
            {
            $editdef1  =  $editdef1->descrip; 

            }
            $editdef2 = Cis10::find($editdiag->id_def_2); 
            if ($editdef2 == null)
            {
                $editdef2 = null;
            }
            else
            {
            $editdef2  =  $editdef2->descrip; 

            }
            $editdef3 = Cis10::find($editdiag->id_def_3); 
            if ($editdef3 == null)
            {
                $editdef3 = null;
            }
            else
            {
            $editdef3  =  $editdef3->descrip; 

            }
             
            $editpers1 = Cis10::find($editdiag->id_pers_1); 
            if ($editpers1 == null)
            {
                $editpers1 = null;
            }
            else
            {
            $editpers1  =  $editpers1->descrip; 

            }

            $editpers2 = Cis10::find($editdiag->id_pers_2); 
            if ($editpers2 == null)
            {
                $editpers2 = null;
            }
            else
            {
            $editpers2  =  $editpers2->descrip; 

            }

            $editpers3 = Cis10::find($editdiag->id_pers_3); 
            if ($editpers3 == null)
            {
                $editpers3 = null;
            }
            else
            {
            $editpers3 =  $editpers3->descrip; 

            }
        }

        $editevo = evolution::whereBetween('created_at', array($start, $end))->where('id_patient',$id)->where('id_user',$me->id)->latest()->first();
        $rcons = rconsultation::where('id_patient',$id)->rconsul($search)->latest()->paginate(5); 
        $rconsadmin = rconsultation::withTrashed()->where('id_patient',$id)->rconsul($search)->latest()->paginate(5); 

           return view('attention.homeattention',['patientedit'=>$patientedit, 'genders'=>$genders,'contacts'=>$contacts , 'bloodtypes'=>$bloodtypes,'ims'=>$ims,'cpsps'=>$cpsps,'cis10s'=>$cis10s, 'rcons'=>$rcons,'editpatianam'=>$editpatianam,'editvital'=>$editvital,'editexplo'=>$editexplo,'editrconsult'=>$editrconsult,'editdiag'=>$editdiag,'editdef1'=>$editdef1,'editdef2'=>$editdef2,'editdef3'=>$editdef3,'editpers1'=>$editpers1,'editpers2'=>$editpers2,'editpers3'=>$editpers3,'editevo'=>$editevo,'rconsadmin'=>$rconsadmin]);
    }



    public function block($id)
    {

        $viewrconsul = rconsultation::find($id);
        $patientedit = patient::find($viewrconsul->id_patient);
        $genders = gender::all(); 
        $contacts = contact::all();
        $bloodtypes = bloodtype::all();
        $ims = im::all();
        $cpsps = cpsp::all();
        $cis10s= Cis10::all();
        $viewpatient = $this->PatientView($viewrconsul->id_patient);
        $viewpatianam =patientanamne::where('id_patient',$viewrconsul->id_patient)->latest()->first();
        $viewvital = vitalsign::find($viewrconsul->id_vitalg);
        $viewexplo = exploregion::find($viewrconsul->id_exploregions);
        $viewdiag = diagnosi::find($viewrconsul->id_diagnosi);

        $viewevol = evolution::find($viewrconsul->id_evolu);

        $rcons = rconsultation::where('id_patient',$viewrconsul->id_patient)->latest()->paginate(5);

         $rconsadmin =rconsultation::withTrashed()->where('id_patient',$id)->latest()->paginate(5);


        return view('attention.viewattention',['patientedit'=>$patientedit,'genders'=>$genders,'contacts'=>$contacts , 'bloodtypes'=>$bloodtypes,'viewrconsul'=>$viewrconsul,'viewpatianam'=>$viewpatianam,'viewvital'=>$viewvital,'ims'=>$ims,'cpsps'=>$cpsps,'viewexplo'=>$viewexplo,'viewdiag'=>$viewdiag,'viewevol'=>$viewevol,'rcons'=>$rcons,'rconsadmin'=>$rconsadmin]);

    }

 

    private function SearchReasonConsult($search)
    {
       
        
    }

     private function PatientView($id)

    {


      return patient::find($id);
    }

    
}
