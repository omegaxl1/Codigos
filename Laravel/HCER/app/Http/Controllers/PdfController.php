<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patient;
use App\patientanamne;
use App\rconsultation;
use App\vitalsign;
use App\exploregion;
use App\diagnosi;
use App\evolution;
use PDF;
class PdfController extends Controller
{
       public function viewpatient()
    {

        $patients =patient::latest()->whereNotNull('id')->paginate(20);
        return view('pdf.homepdf',['patients'=>$patients]);
    }

    public function viewpatieseach(Request $request)
    {

     $search = $request->input('buscar');
     $patients = $this->SearchUserPatientAtt($search);
    	
     return view('pdf.homepdf',['patients'=>$patients]);

    }
    public function pdfview($id,Request $request)
    {


         $patient = patient::find($id);
         $patientanamne = patientanamne::where('id_patient',$id)->latest()->first();
         $rconsultations =rconsultation::where('id_patient',$id)->latest()->get();
         $vitalsigns =vitalsign::where('id_patient',$id)->latest()->get();
         $exploregions = exploregion::where('id_patient',$id)->latest()->get();
        $diagnosis = diagnosi::where('id_patient',$id)->latest()->get();
        $evolutions = evolution::where('id_patient',$id)->latest()->get();

         view()->share(['patient'=>$patient,'patientanamne'=>$patientanamne,'rconsultations'=>$rconsultations,'vitalsigns'=>$vitalsigns,'exploregions'=>$exploregions,'diagnosis'=>$diagnosis,'evolutions'=>$evolutions]);

      
            // Set extra option
            PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
            // pass view file
            $pdf = PDF::loadView('pdfview');
            // download pdf
            return $pdf->download('expediente_'.$patient->namef.'_'.$patient->namel.'_'.$patient->ci.'.pdf');
     
     
    }

     private function SearchUserPatientAtt($search)
    {
        return patient::ci($search)->latest()->paginate(20);
    }

 
}
