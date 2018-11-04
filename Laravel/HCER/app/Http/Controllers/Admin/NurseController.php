<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\CreateUserUpdateRequest;
use App\User;

class NurseController extends Controller
{
    public  function view()
   {
   	$users = $this->listUsernameNurse();

   

   	return view('users.homenurse',['users'=>$users ]);
   }

    public  function searchnurse( Request $request)
   {
    $search = $request->input('buscar');
    $users = $this->SearchUserNurse($search);
    return view('users.homenurse',['users'=>$users]);
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
        'id_specialty'=>$request->input('id_specialty'),
        'password'=>bcrypt($request->input('password')),
        'id_role'=>3, 
        'id_user'=>$me->id 
   		 ]);

   return back()->with('notification','Usuario registrado correctamente.');
    
    //visualiacion de varialbles
   //dd($request->all()) ;
   }

    
      public function edit($id){

        $user = $this->NurseView($id);

        $userslist = $this->listUsernameNurse();
         return view('users.editusernurse',['users'=>$userslist , 'usersedit'=>$user]);
    }




 


    private function listUsernameNurse()
    {
       return User::withTrashed()->latest()->users(3)->paginate(5);
    }

      private function SearchUserNurse($search)
    {
        return User::withTrashed()->ci($search)->users(3)->paginate(5);
    }

    private function NurseView($id)

    {
      return User::find($id);
    }

}
