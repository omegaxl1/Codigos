<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateMedicRequest;
use App\Http\Requests\CreateMedicUpdateRequest;
use App\User;
use App\Specialty;

class MediController extends Controller
{
    	
   public  function view()
   {
   	$users = $this->listUsernameMedic();

   	$specialties = Specialty::all(); 

   	return view('users.homemedic',['users'=>$users , 'specialties'=>$specialties]);
   }

   public  function searchmedic( Request $request)
   {
    $search = $request->input('buscar');
    $users = $this->SearchUserMedic($search);
    $specialties = Specialty::all(); 
    return view('users.homemedic',['users'=>$users , 'specialties'=>$specialties]);
   }




   public function insert(CreateMedicRequest $request)
   {
   

   		   $me =$request->user();

         $user = User::create([
      
        'ci'=> $request->input('ci'),
        'name'=>$request->input('name'),
        'lastname'=>$request->input('lastname'),
        'birthday'=>$request->input('birthday'),
        'address'=>$request->input('address'), 
        'phone'=>$request->input('phone'),
        'email'=>$request->input('email'),
        'id_specialty'=>$request->input('id_specialty'),
        'password'=>bcrypt($request->input('password')),
        'id_role'=>2, 
        'id_user'=>$me->id 
   		 ]);

   return back()->with('notification','El usuario Exitosamente Registrado');
    
    //visualiacion de varialbles
   //dd($request->all()) ;
   }

     public function edit($id){

        $user = $this->MedicView($id);
        $specialties = Specialty::all(); 

        $userslist = $this->listUsernameMedic();
         return view('users.editusermedic',['users'=>$userslist , 'usersedit'=>$user,  'specialties'=>$specialties]);
    }
 public function block($id){

        $user = $this->MedicView($id);
        $specialties = Specialty::all(); 

        $userslist = $this->listUsernameMedic();
         return view('users.blockmedic',['users'=>$userslist , 'usersedit'=>$user,  'specialties'=>$specialties]);
    }


    public function update($id, CreateMedicUpdateRequest $request){
  
       
        $user = $this->MedicView($id);
        $vci = $user->ci;
        $vemail = $user->email; 
        $ci = $request->input('ci');
        $email = $request->input('email');
        $queryci = $this->SeachMediCi($ci);
        $queryemail = $this->SeachMedicEmail($email);
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

      return back()->with('notialert','ci ya esta registrado por otro usuario');


        }


        if($cemail == false)

        {

       return back()->with('notialert','cCorreo Electrónico ya esta registrado por otro usuario.');
        }


    
         $me =$request->user();
         $user->ci = $ci;
         $user->name=$request->input('name');
         $user->lastname=$request->input('lastname');
         $user->birthday=$request->input('birthday');
         $user->address=$request->input('address'); 
         $user->phone=$request->input('phone');
         $user->email=$request->input('email');
         $password = $request->input('password');
         $user->id_user=$me->id; 

         
         if($password)
         $user->password= bcrypt($password);
         
         
         $user->save();


      return back()->with('notification','usuario actualizado correctamente');


    }


    private function listUsernameMedic()
    {
       return User::withTrashed()->latest()->users(2)->paginate(5);
    }

        private function SearchUserMedic($search)
    {
        return User::withTrashed()->ci($search)->users(2)->paginate(5);
    }


    private function MedicView($id)

    {
      return User::find($id);
    }

      private function SeachMediCi($ci)
    {
        return User::userci($ci)->first();
    }
       private function SeachMedicEmail($email)
    {
        return User::useremail($email)->first();
    }

}
