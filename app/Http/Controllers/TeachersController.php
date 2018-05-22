<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use Alert;

class TeachersController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('roles:admin',['except' => ['edit','update','destroy','create','index','store']]);
    }

    public function index()
    {

        $teacher = Teacher::all()->where('estado','activo');  
        return view('teacher.index',compact('teacher'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.create');    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $teacher = Teacher::create($request->all());

        if ($request->hasFile('documentos')) {
           $teacher->documentos = $request->file('documentos')->store('public');
        }

        $teacher->save();

        Alert::success('<a href="/teachers/create/">Desea agregar otro docente?</a>')->html()->persistent("No, Gracias");

        return redirect()->route('teachers.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('teacher.edit',compact('teacher'));
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
      

        $teacher = Teacher::findOrFail($id);

        // if ($request->hasFile('documentos')) {

        //     $teacher->documentos = $request->file('documentos')->store('public');
        // }
        if ($request->hasFile('documentos')) {

        $teacher->documentos = $request->file('documentos')->store('public');

        }

        $teacher->update($request->only('nombres'));

        Alert::success('Docente actualizado satisfactoriamente', 'Success')->persistent("Close");
        // alert()->success('Category deleted successfully', 'Success')->persistent("Close");
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
        $teacher = Teacher::findOrFail($id);
        $teacher->estado='inactivo';
        $teacher->update();
        //redireccionar
        alert()->success('Rol eliminado satisfactoriamente', 'Éxito')->persistent("Close");
        return back();
    }
}
