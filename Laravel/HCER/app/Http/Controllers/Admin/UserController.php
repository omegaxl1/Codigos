<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\CreateUserUpdateRequest;
use App\User;


class UserController extends Controller
{


	
   public  function view()
   {
   	$users = $this->listUserAdmin();
   	return view('users.homeuser',['users'=>$users]);
   }


   public  function searchadmin( Request $request)
   {
    $search = $request->input('buscar');
    $users = $this->SearchUserAdmin($search);
    return view('users.homeuser',['users'=>$users]);
   }


   public function insert(CreateUserRequest $request)
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
        'password'=>bcrypt($request->input('password')),
        'id_role'=>1, 
        'id_user'=>$me->id 
   		 ]);

   		 return back()->with('notification','Usuario registrado correctamente.');
    
    //visualiacion de varialbles
   //dd($request->all()) ;
   }



      public function edit($id){

        $user = $this->UserView($id);

        $userslist = $this->listUserAdmin();
         return view('users.edituseradmin',['users'=>$userslist , 'usersedit'=>$user]);
    }

    




public function update($id, CreateUserUpdateRequest $request){
  
       
        $user = $this->UserView($id);
        $vci = $user->ci;
        $vemail = $user->email; 
        $ci = $request->input('ci');
        $email = $request->input('email');
        $queryci = $this->SeachUser($ci);
        $queryemail = $this->SeachUserEmail($email);
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

      return back()->with('notialert','Ya está registrado la cédula por otro usuario.');


        }


        if($cemail == false)

        {

      return back()->with('notialert','Correo Electrónico ya esta registrado por otro usuario.');
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


      return back()->with('notification','Usuario modificado correctamente.');


    }
    


   public function deleteuser($id)
   {
     	$user = $this->UserView($id);
        $user->delete();
       return back()->with('notification','El usuario se ha dado de baja');

   }


public function restore($id)
{

    
		User::withTrashed()->find($id)->restore();



        return back()->with('notification','El usuario se ha habilitado correctamente');
}

   


    private function listUserAdmin()
    {
        return User::withTrashed()->latest()->users(1)->paginate(5);
    }
     private function SearchUserAdmin($search)
    {
        return User::withTrashed()->ci($search)->users(1)->paginate(5);
    }

    private function UserView($id)

    {
      return User::find($id);
    }

       private function SeachUser($ci)
    {
        return User::userci($ci)->first();
    }
       private function SeachUserEmail($email)
    {
        return User::useremail($email)->first();
    }


}
