<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\CreateUserUpdateRequest;
use App\User;

class ReceptionController extends Controller
{
    public  function view()
   {
   	$users = $this->listUsernameRecep();

   

   	return view('users.homenrecep',['users'=>$users ]);
   }

   public  function searchrecep( Request $request)
   {
    $search = $request->input('buscar');
    $users = $this->SearchUserRecep($search);
    return view('users.homenrecep',['users'=>$users]);
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
        'id_role'=>4, 
        'id_user'=>$me->id 
   		 ]);

   return back()->with('notification','Usuario registrado correctamente.');
    
    //visualiacion de varialbles
   //dd($request->all()) ;
   }

    
      public function edit($id){

        $user = $this->RecepView($id);

        $userslist = $this->listUsernameRecep();
         return view('users.edituserecep',['users'=>$userslist , 'usersedit'=>$user]);
    }






    private function listUsernameRecep()
    {
       return User::withTrashed()->latest()->users(4)->paginate(5);
    }

        private function SearchUserRecep($search)
    {
        return User::withTrashed()->ci($search)->users(4)->paginate(5);
    }


    private function RecepView($id)

    {
      return User::find($id);
    }

 
}
