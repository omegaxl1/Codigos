<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Entities\Role;
use App\Entities\User;
use Carbon\Carbon;

class UserController extends Controller
{



  /*  public function __construct(TareasRepository $tareas){
        $this->tareas = $tareas;
    }
    public function index(){

      // var_dump($tareas);
     $tareas = $this->tareas->porPrioridades(1,1);

     foreach ($tareas as $tarea){
        //echo "<p>".$tarea->titulo." ".$tarea->prioridad."</p>";
        $tarea->titulo;
        $tarea->proridad['prioridad'];
     }

    }*/


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        $users = User::withTrashed()->paginate(5);
        $action = route('users.create');

        return view('users.create')->with(compact('roles','users','action'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        list($rules ,$messages) = $this->_rules();
        $this->validate($request,$rules,$messages);

        $name = $request->input('name');
        $email = $request->input('email');
        $password =bcrypt($request->input('password'));
        $id_role =$request->input('id_rol');
        $user =[
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'id_role'=>$id_role,
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now()
        ];
        User::insert($user);

       /* $tarea = new Tarea($request->input());
        $tarea->usuario_id =1;
        $tarea->save();*/

        return redirect()->route('users.view');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $action = route('user.update',['id'=> $id]);
        $roles = Role::all();
        $useredit =  User::find($id);
        //User::where('id',$id)->first();
        $users = User::withTrashed()->paginate(5);
      return view('users.edit')->with(compact('roles','users','useredit','action'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        list($rules ,$messages) = $this->_rulesUp();
        $this->validate($request,$rules,$messages);
        $user = User::find($id);
       $user->name =$request->input('name');
       $user->email = $request->input('email');
       $user->id_role = $request->input('id_rol');

       $user->save();
        return redirect()->route('users.view');
       // return redirect()->route('user.update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    #reglas de validacion

    private function _rules(){
        $messages =[
            'name.required' =>'El nombre es requerido',
            'name.min'=>'El nombre debe tener minimo de 5 caractes',
            'email.required'=>'El email es requerido',
            'email.email'=>'Ingrese un email valido',
            'email.unique'=>'Ingrse un email no registrado',
            'password.required'=>'Ingrese una contraseña',
            'password.min'=>'Ingrese mas de 6 caracteres',
            'id_rol.exists'=>'Seleccione un rol valido'

        ];
        $rules =[
            'name'=>'required|min:5',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6',
            'id_rol'=>'exists:roles,id',
        ];

        return array($rules,$messages);
    }


    private function _rulesUp(){
        $messages =[
            'name.required' =>'El nombre es requerido',
            'name.min'=>'El nombre debe tener minimo de 5 caractes',
            'email.exists'=>'El email no es valido',
            'email.email'=>'Ingrese un email valido',

            'password.required'=>'Ingrese una contraseña',
            'password.min'=>'Ingrese mas de 6 caracteres',
            'id_rol.exists'=>'Seleccione un rol valido'

        ];
        $rules =[
            'name'=>'required|min:5',
            'email'=>'required|exists:users,email',
            'password'=>'required|min:6',
            'id_rol'=>'exists:roles,id',
        ];

        return array($rules,$messages);
    }
}






