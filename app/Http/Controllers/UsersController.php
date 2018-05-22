<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UpdateUserRequest;

use App\Role;
use App\Student;
use App\User;
use App\Attorney;

class UsersController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('roles:admin',['except' => ['edit','update','destroy','create','index','store','show']]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $users = User::all();
        
        return view('auth.index', compact('users'));
    }



    public function create()
    {

       $roles = Role::all(); 
       
       return  view('auth.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Guadar mensaje
        /*DB::table('mensajes')->insert([

            "nombre" => $request->input('nombre'),
            "email" => $request->input('email'),
            "mensaje" => $request->input('mensaje'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),

        ]);*/

       User::create($request->all());

        // Redireccionar mensaje
        return back()->with('info','Usuario Agregado');   
    
    }

      public function show($id)
    {

        //$consulta = DB::table('mensajes')->where('id', $id)->first();

        $users = User::findOrFail($id);
        return view('auth.show',compact('users'));

    }


        public function edit($id)
    {

        $user = User::findOrFail($id);

        $this->authorize('edit',$user);

        $students = Student::pluck('email','id');
        $attorneys = Attorney::pluck('dni','id');

        return view('auth.edit',compact('user','students','attorneys'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, $id)
    {

        $user = User::findOrFail($id);

        $this->authorize('update',$user);


        $user->update($request->all());

        $user->student()->sync($request->student);
        $user->attorney()->sync($request->attorney);

        return back()->with('info','usuario actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
              // return "Eliminando el mensaje " . $id;    }
        //eliminar mensaje
        //DB::table('mensajes')->where('id',$id)->delete();
        $user = User::findOrFail($id);
        $user->delete();
        //redireccionar
        $this->authorize('destroy', $user);

        return back();
    }
}
