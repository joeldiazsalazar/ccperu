<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Student;
use App\Role;
use App\Attorney;

use Alert;

class StudentsController extends Controller
{


    public function index()
    {


        $students = Student::all()->where('estado','activo');

        return view('student.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all()->where('name','alumno'); 
        $attorneys = Attorney::all();

        return  view('student.create',compact('roles','attorneys'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Student::create($request->all());
        User::create($request->all());

        // alert()->success('Rol Creado')->persistent("Cerrar");
        Alert::success('<a href="/students/create/">Desea agregar otro alumno?</a>')->html()->persistent("No, Gracias");

        // Redireccionar mensaje
        return back()->with('info','Alumno Agregado');   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::findOrFail($id);
        
        return view('student.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::findOrFail($id);

        $attorneys = Attorney::all();

        return view('student.edit',compact('students','attorneys'));
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
        $students = Student::findOrFail($id);

        $students->update($request->all());
        
        Alert::success('Alumno actualizado satisfactoriamente', 'Success')->persistent("Close");

        return back()->with('info','Rol actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Student::findOrFail($id);
        $students->estado='inactivo';
        $students->update();
        //redireccionar
        Alert::success('Alumno eliminado satisfactoriamente', 'Éxito')->persistent("Close");

        return back();
    }
}
