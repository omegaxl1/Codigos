<?php

namespace App\Http\Controllers\Attention;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreatePatientMedic;
use App\Http\Requests\CreatePatientUpdateMedic;
use App\Http\Requests\CreatePatientRecpRequest;
use App\Http\Requests\CreatePatientRecpUpdateRequest;
use App\gender;
use App\patient;
use App\contact;
use App\bloodtype;


class PatientController extends Controller
{

	public  function view()
   {
   	$patients = $this->listPatient();

   	$genders = gender::all(); 

   	$contacts = contact::all();

   	$bloodtypes = bloodtype::all();

   

   	return view('patient.homepatients',['patients'=>$patients , 'genders'=>$genders,'contacts'=>$contacts , 'bloodtypes'=>$bloodtypes]);
   }


public  function viewmedic()
   {
    $patients = $this->listPatientMedic();

    $genders = gender::all(); 

    $contacts = contact::all();

    $bloodtypes = bloodtype::all();

   

    return view('patient.homepatients',['patients'=>$patients , 'genders'=>$genders,'contacts'=>$contacts , 'bloodtypes'=>$bloodtypes]);
   }



  public function searchpatient( Request $request)
  {
    $search = $request->input('buscar');
    $patients = $this->SearchUserPatient($search);
    $genders = gender::all(); 
    $contacts = contact::all();
    $bloodtypes = bloodtype::all();
    return view('patient.homepatients',['patients'=>$patients , 'genders'=>$genders,'contacts'=>$contacts , 'bloodtypes'=>$bloodtypes]);


  }

    public function searchpatientatt( Request $request)
  {
    $search = $request->input('buscar');
    $patients = $this->SearchUserPatientAtt($search);
    $genders = gender::all(); 
    $contacts = contact::all();
    $bloodtypes = bloodtype::all();
    return view('patient.homepatients',['patients'=>$patients , 'genders'=>$genders,'contacts'=>$contacts , 'bloodtypes'=>$bloodtypes]);


  }

  


   public function insertmedic( CreatePatientMedic $request)
   {

   	$me = $request->user();
		   	$patiens = patient::create([
		   	'ci'=>$request->input('ci'),
		   	'namef'=>$request->input('namef'),
		   	'namel'=>$request->input('lastname'),
		   	'birthday'=>$request->input('birthday'),
		   	'address'=>$request->input('address'),
		   	'phone'=>$request->input('phone'),
		   	'occupation'=>$request->input('occupation'),
		   	'id_contact'=>$request->input('id_contact'),
		   	'namecontact'=>$request->input('namecontact'),
		   	'contphone'=>$request->input('contphone'),
		   	'email'=>$request->input('email'),
		   	'id_gender'=>$request->input('id_gender'),
		   	'id_bloodtype'=>$request->input('id_bloodtype'),
		   	'id_user'=>$me->id
		   	]);


		   

		   	return back()->with('notification','Se ha Registrado Correctamente el Paciente');


   }
   public function insertrecp( CreatePatientRecpRequest $request)
   {

    $me = $request->user();
        $patiens = patient::create([
        'ci'=>$request->input('ci'),
        'namef'=>$request->input('namef'),
        'namel'=>$request->input('lastname'),
        'birthday'=>$request->input('birthday'),
        'address'=>$request->input('address'),
        'phone'=>$request->input('phone'),
        'email'=>$request->input('email'),
        'id_gender'=>$request->input('id_gender'),
        'id_bloodtype'=>$request->input('id_bloodtype'),
        'id_user'=>$me->id
        ]);


       

        return back()->with('notification','Se ha Registrado Correctamente el Paciente');


   }



     public function edit($id){

        $patientedit = $this->PatientView($id);

        $patients = $this->listPatientMedic();

        $genders = gender::all(); 

	     	$contacts = contact::all();

	     	$bloodtypes = bloodtype::all();
        	return view('patient.editpatients',['patientedit'=>$patientedit,'patients'=>$patients , 'genders'=>$genders,'contacts'=>$contacts , 'bloodtypes'=>$bloodtypes]);
    }

    




public function updatemedic($id, CreatePatientUpdateMedic $request){

        $patient = $this->PatientView($id);
        $vci = $patient->ci;
        $vemail = $patient->email; 
        $ci = $request->input('ci');
        $email = $request->input('email');
        $queryci = $this->SeachPatient($ci);
        $queryemail = $this->SeachPatientEmail($email);
        $cci = false;
        $cemail= false;

          if($queryci == null)
                {
                  $cci = true;
                 

                }

            if ($vci == $ci)
                  {

                      $cci = true;

                  }

                if($queryemail == null)
                {
                 
                 $cemail = true;


                }

                 if ($vemail == $email)
                  {

                    $cemail = true;

                  }

        if($cci == false)

        {

      return back()->with('notialert','Ya está registrado la cédula por otro paciente');


        }


        if($cemail == false)

        {

      return back()->with('notialert','Ya está registrado este correo por otro paciente.');
        }
          $me =$request->user();

      
       
      
        

         $patient->ci = $ci;
         $patient->namef=$request->input('namef');
         $patient->namel=$request->input('lastname');
         $patient->birthday=$request->input('birthday');
         $patient->address=$request->input('address'); 
         $patient->phone=$request->input('phone');
         $patient->occupation=$request->input('occupation');
         $patient->id_contact=$request->input('id_contact');
         $patient->namecontact=$request->input('namecontact');
         $patient->contphone=$request->input('contphone');
         $patient->email=$email;
         $patient->id_gender=$request->input('id_gender');
         $patient->id_bloodtype=$request->input('id_bloodtype');

         $patient->id_user=$me->id; 
         
        
         
         
         $patient->save();


      return back()->with('notification','Datos del Paciente  Actualizado Correctamente');


    }

    public function updaterecp($id, CreatePatientRecpUpdateRequest $request){

        $patient = $this->PatientView($id);
        $vci = $patient->ci;
        $vemail = $patient->email; 
        $ci = $request->input('ci');
        $email = $request->input('email');
        $queryci = $this->SeachPatient($ci);
        $queryemail = $this->SeachPatientEmail($email);
        $cci = false;
        $cemail= false;

          if($queryci == null)
                {
                  $cci = true;
                 

                }

            if ($vci == $ci)
                  {

                      $cci = true;

                  }

                if($queryemail == null)
                {
                 
                 $cemail = true;


                }

                 if ($vemail == $email)
                  {

                    $cemail = true;

                  }

        if($cci == false)

        {

      return back()->with('notialert','Ya está registrado la cédula por otro paciente');


        }


        if($cemail == false)

        {

      return back()->with('notialert','Ya está registrado este correo por otro paciente.');
        }
          $me =$request->user();

      
       
      
        

         $patient->ci = $ci;
         $patient->namef=$request->input('namef');
         $patient->namel=$request->input('lastname');
         $patient->birthday=$request->input('birthday');
         $patient->address=$request->input('address'); 
         $patient->phone=$request->input('phone');
         $patient->email=$email;
         $patient->id_gender=$request->input('id_gender');
         $patient->id_bloodtype=$request->input('id_bloodtype');
         $patient->id_user=$me->id; 
         
        
         
         
         $patient->save();


      return back()->with('notification','Datos del Paciente  Actualizado Correctamente');


    }
    


   public function delete($id)
   {
      	$patient = $this->PatientView($id);
        $patient->delete();
        return back()->with('notialert','El paciente se ha dado de baja');

   }


public function restore($id)
{

    
		patient::withTrashed()->find($id)->restore();



        return back()->with('notification','El paciente  se ha habilitado correctamente');
}

   


    private function listPatient()
    {
        return patient::withTrashed()->latest()->whereNotNull('id')->paginate(5);
    }
     private function listPatientMedic()
    {
        return patient::latest()->whereNotNull('id')->paginate(5);
    }

       private function SearchUserPatient($search)
    {
        return patient::withTrashed()->ci($search)->latest()->paginate(5);
    }
       private function SearchUserPatientAtt($search)
    {
        return patient::ci($search)->latest()->paginate(5);
    }


    private function PatientView($id)

    {
      return patient::find($id);
    }


       private function SeachPatient($ci)
    {
        return patient::patientci($ci)->first();
    }
       private function SeachPatientEmail($email)
    {
        return patient::patientemail($email)->first();
    }


}




    

	