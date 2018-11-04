<?php

namespace App\Http\Controllers\Attention;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\MedicalExamnsRequest;
use App\patient;
use App\ExamPaients;
class MedicalExamsController extends Controller
{
   public function view ()
   {

   	$patients = $this->listPatient();

   	return view('medical.homexams',['patients'=>$patients]);
   }

   public function viewsearch( Request $request)
   {

   	$search = $request->input('buscar');
    $patients = $this->SearchUserPatient($search);
    return view('medical.homexams',['patients'=>$patients ]);



   }

   public function viexamn($id, Request $request)
   {
   	$me = $request->user();
   	$patient = $this->PatientView($id);
   	$exampatients =$this->Exampat($id,$me->id);

   	return view('medical.homexampatient',['exampatients'=>$exampatients,'patient'=>$patient]);
   }

    public function viexamnsearch($id, Request $request)
   {
   	$me = $request->user();
   	$search = $request->input('buscar');
   	$patient = $this->PatientView($id);
   	$exampatients =$this->Exampatsearch($search,$id,$me->id);

   	return view('medical.homexampatient',['exampatients'=>$exampatients,'patient'=>$patient]);
   }

    public function insert($id,MedicalExamnsRequest $request)
   {

   	$me = $request->user();
   	$exam = ExamPaients::create([
   	'title'=>$request->input('title'),
   	'observations'=>$request->input('observations'),
   	'id_patient'=>$id, 
	'id_user'=>$me->id
   	]);


   return back()->with('notification','Registro del examne médico fue correctamete registrado');
   }
   public function edit($id)
   {

   $exammedic = ExamPaients::find($id);

   return view('medical.editexam',['exammedic'=>$exammedic]);

   }

   public function update($id,MedicalExamnsRequest $request)
   {
   	$me = $request->user();
   	$exammedic = ExamPaients::find($id);
   	$exammedic->title=$request->input('title');
   	$exammedic->observations=$request->input('observations');
    $exammedic->save(); 
   	return back()->with('notification','Registro del examne médico fue correctamete actualizado');

   }
    private function Exampatsearch($search,$idp,$idm)
   {
   	return ExamPaients::where('title','LIKE',"%$search%")->where('id_patient',$idp)->where('id_user',$idm)->latest()->paginate(5);
   } 

   private function Exampat($idp,$idm)
   {
   	return ExamPaients::where('id_patient',$idp)->where('id_user',$idm)->latest()->paginate(5);
   } 
    private function listPatient()
    {
        return patient::latest()->whereNotNull('id')->paginate(5);
    }
    private function SearchUserPatient($search)
    {
        return patient::ci($search)->latest()->paginate(5);
    }
      private function PatientView($id)

    {
      return patient::find($id);
    }
}
