<?php

namespace App\Http\Controllers\Attention;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\patient;
use App\gender;
use App\bloodtype;
use App\contact;
use App\User;
use App\Specialty;
use App\turn;
use App\statusdate;
use App\Http\Requests\CreateDateRequest;
use App\Http\Requests\CreateDateUpdateRequest;
class DateController extends Controller
{
   public function view ()
   {

   	$patients = $this->listPatient();

   	return view('appointment.homedate',['patients'=>$patients ]);

   }

   public function searchpatient( Request $request)
   {

   	$search = $request->input('buscar');
    $patients = $this->SearchUserPatient($search);
  

   

    return view('appointment.homedate',['patients'=>$patients ]);



   }

   public function medic($id, Request $request )
   {

   	$patientedit  = $this->PatientView($id);
   	$users = $this->listUsernameMedic();
   	$specialties = Specialty::all(); 
    $genders = gender::all(); 
    $bloodtypes = bloodtype::all();
    $contacts = contact::all();



   	return view('appointment.homemedicdate',['patientedit'=>$patientedit,'genders'=>$genders,'bloodtypes'=>$bloodtypes,'contacts'=>$contacts,'specialties'=>$specialties , 'users'=>$users]);
   }

     public function searchmedic($id, Request $request )
   {
   	 
     $search = $request->input('buscar');
      $selectspe = $request->input('id_specialty');

      if($selectspe == 0)
      {
      $users = $this->SearchUserMedic($search);
      }
      else
      {
        $users = $this->SearchUserMedicEspe($search,$selectspe);
      }


   	$patientedit = $this->PatientView($id);
    $genders = gender::all(); 
    $bloodtypes = bloodtype::all();
    $contacts = contact::all();
   	$users = $this->SearchUserMedic($search);
   	$specialties = Specialty::all(); 

   	return view('appointment.homemedicdate',['patientedit'=>$patientedit,'genders'=>$genders,'bloodtypes'=>$bloodtypes,'contacts'=>$contacts,'specialties'=>$specialties , 'users'=>$users]);
   }

   public function select($idpacient, $idmedic)
   {
   	 	$patientedit = $this->PatientView($idpacient);
      $genders = gender::all(); 
      $bloodtypes = bloodtype::all();
      $contacts = contact::all();
   	 	$viewuser = $this->MedicView($idmedic);
   	 	$specialties = Specialty::all(); 

   	 	return view('appointment.homehourdate',['patientedit'=>$patientedit,'genders'=>$genders,'bloodtypes'=>$bloodtypes,'contacts'=>$contacts,'usersedit'=>$viewuser,'viewuser'=>$viewuser,'specialties'=>$specialties]);


   }
   public function save ($idpacient, $idmedic, CreateDateRequest $request)
   {
   


    	
   		$me = $request->user();
      $hour =$request->input('hour');
      $minutes=$request->input('minutes');
      $dateturns=$request->input('dateturns');



   		$check = turn::where('id_medic',$idmedic)->where('hour',$hour)->where('minutes',$minutes)->where('dateturns',$dateturns)->first();

   		if($check != null)
   		{

   			return back()->with('notialert','Ingrese Otra Fecha Por Que El Médico ya tiene Agendado sea fecha y hora');
   		}
   		$turn = turn::create([

		'hour'=>$request->input('hour'), 
		'minutes'=>$request->input('minutes'), 
		'timezone'=>$request->input('timezone'), 
		'dateturns'=>$request->input('dateturns'), 
		'id_status'=>1,
		'id_medic'=>$idmedic, 
		'id_patient'=>$idpacient,
   		'id_user'=>$me->id

   		]);



	return back()->with('notification','Se ha Agendado Correctamente la Cita Medica');



   }

public function viewmedic(Request $request)
{
      $users = $this->listUsernameMedic();
      $specialties = Specialty::all(); 


  return view('appointment.homemedicviewdate',['users'=>$users,'specialties'=>$specialties]);
}

public function viewsearch(Request $request)
{
  $search = $request->input('buscar');
  $selectspe = $request->input('id_specialty');

  if($selectspe == 0)
  {
  $users = $this->SearchUserMedic($search);
  }
  else
  {
    $users = $this->SearchUserMedicEspe($search,$selectspe);
  }
  
  $users = $this->SearchUserMedic($search);
  $specialties = Specialty::all(); 


  return view('appointment.homemedicviewdate',['users'=>$users,'specialties'=>$specialties]);


}

  public function viewdate($id)
  {
     $start = date('Y-m-d');
    $turnmedics= turn::where('id_medic',$id)->where('dateturns',$start)->latest()->paginate(15);

    $user=User::find($id);
    return view('appointment.homedatemedic',['turnmedics'=>$turnmedics,'user'=>$user]);

  }



public function viewdatesearch ($id, Request $request)
{

  $start =  $request->input('dateturns');
  $turnmedics= turn::where('id_medic',$id)->where('dateturns',$start)->latest()->paginate(15);
  $user=User::find($id);
  return view('appointment.homedatemedic',['turnmedics'=>$turnmedics,'user'=>$user]);

}


//citas para medicos
public function viewdatemedic(Request $request)
{
  $me = $request->user();
  $start = date('Y-m-d');
  $turnmedics= turn::where('id_medic',$me->id)->where('dateturns',$start)->latest()->paginate(15);
  $user=User::find($me->id);
  return view('appointment.homedatemedic',['turnmedics'=>$turnmedics,'user'=>$user]);
}

public function viewdatesearchmedic ($id, Request $request)
{

  $start =  $request->input('dateturns');
  $turnmedics= turn::where('id_medic',$id)->where('dateturns',$start)->latest()->paginate(15);
  $user=User::find($id);
  return view('appointment.homedatemedic',['turnmedics'=>$turnmedics,'user'=>$user]);

}

  public function viewdatep($id)
  {

  $turnmedics= turn::find($id);
  $usersedit = User::find($turnmedics->id_medic);
  $specialties = Specialty::all(); 
  $patientedit = patient::find($turnmedics->id_patient);
  $genders = gender::all(); 
  $bloodtypes = bloodtype::all();
  $contacts = contact::all();
  $statusdates= statusdate::all();

  return view('appointment.homedateview',['patientedit'=>$patientedit,'genders'=>$genders,'bloodtypes'=>$bloodtypes,'contacts'=>$contacts,'usersedit'=>$usersedit,'specialties'=>$specialties,'turnmedics'=>$turnmedics,'statusdates'=>$statusdates]);

  }

  public function updatedate($id ,CreateDateUpdateRequest $request)
  {
    $me = $request->user();
    $turnmedics= turn::find($id);
    $turnmedics->id_status=$request->input('id_statusdate');
    $turnmedics->id_user=$me->id;
    $turnmedics->save();
    return back()->with('notification','Se actualizado correctamete la cita medica');
  }


  public function deletedate($id)
  {

   $turnmedics= turn::destroy($id);
    return back()->with('notialert','Se Eliminado correctamete la cita medica');
  }

    private function PatientView($id)

    {
      return patient::find($id);
    }

    private function MedicView($id)
    {

    	return User::find($id);

    }

      private function listUsernameMedic()
    {
       return User::latest()->users(2)->paginate(5);
    }

    private function SearchUserMedic($search)
    {
      return User::ci($search)->users(2)->paginate(5);
    }
     private function SearchUserMedicEspe($search,$esp)
    {
      return User::ci($search)->esp($esp)->users(2)->paginate(5);
    }


    private function listPatient()
    {
        return patient::latest()->whereNotNull('id')->paginate(5);
    }

        private function SearchUserPatient($search)
    {
        return patient::ci($search)->latest()->paginate(5);
    }

}
