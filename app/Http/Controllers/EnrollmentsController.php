<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Enrollment;
use App\Student;
use App\Attorney;
use Alert;
use App\Programming;
use App\Classroom;

class EnrollmentsController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('roles:admin',['except' => ['edit','update','destroy','create','index','store','show']]);
    }

    public function index(Request $request)
    {
        if ($request->search == "") {

           $enrollment = Enrollment::where('estado','activo')->paginate(5);
           return view('enrollment.index',compact('enrollment'));
        }else{
            $enrollment = Enrollment::whereHas('user', function ($query) use ($request) {
                
                $query->where('username','LIKE','%' . $request->search . '%');

            })->paginate(3);
                                
            $enrollment->appends($request->only('search'));
            return view('enrollment.index',compact('enrollment'));
        }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $student = Student::all();

        $user = User::all()->where('role_id','2');

        $programming = Programming::all();

        return view('enrollment.create',compact('student','user','programming'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $enrollment = Enrollment::create($request->all());
        $enrollment->save();



        if ($enrollment->programming_id === '1') {
            
            $c = '1';
            $id = '1';
                  
            $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();

        }elseif ($enrollment->programming_id === '2') {
            
             $c = '1';
             $id = '2';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '3') {
            
             $c = '1';
             $id = '3';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '4') {
            
             $c = '1';
             $id = '4';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '5') {
            
             $c = '1';
             $id = '5';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '6') {
            
             $c = '1';
             $id = '6';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '7') {
            
             $c = '1';
             $id = '7';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '8') {
            
             $c = '1';
             $id = '8';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '9') {
            
             $c = '1';
             $id = '9';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '10') {
            
             $c = '1';
             $id = '10';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '11') {
            
             $c = '1';
             $id = '11';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '12') {
            
             $c = '1';
             $id = '12';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '13') {
            
             $c = '1';
             $id = '13';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '14') {
            
             $c = '1';
             $id = '14';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '15') {
            
             $c = '1';
             $id = '15';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '16') {
            
             $c = '1';
             $id = '16';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '17') {
            
             $c = '1';
             $id = '17';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '18') {
            
             $c = '1';
             $id = '18';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '19') {
            
             $c = '1';
             $id = '19';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '20') {
            
             $c = '1';
             $id = '20';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '21') {
            
             $c = '1';
             $id = '21';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }elseif ($enrollment->programming_id === '22') {
            
             $c = '1';
             $id = '22';
                  
             $class = Classroom::findOrFail($id);

             $rest = $class->vacante;

             $class->vacante =  $rest - $c;

             $class->update();
        }


        // Redireccionar mensaje

        //Alert::success('Good job!')->persistent("Close");
        //return back()->with('info','Rol Agregado');   


        // alert()->success('Rol Creado')->persistent("Cerrar");
        Alert::success('<a href="/enrollments/create/">Desea agregar otro Matricula?</a>')->html()->persistent("No, Gracias");
            
        return redirect()->route('enrollments.index');
        
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
       $enrollment = Enrollment::findOrFail($id);

       $programming = Programming::all();

       $user = User::where('role_id','2')->pluck('username','id');

       $students = Student::pluck('nombres','id');

       return view('enrollment.edit', compact('enrollment','programming','user','students'));
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
        $enrollment = Enrollment::findOrFail($id);

        $enrollment->update($request->all());
        
        Alert::success('Matricula actualizada satisfactoriamente', 'Success')->persistent("Close");

        return redirect()->route('enrollments.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enrollment = Enrollment::findOrFail($id);
        $enrollment->estado='pendiente';
        $enrollment->update();
        //redireccionar
        Alert::success('Matricula eliminado satisfactoriamente', 'Éxito')->persistent("Close");

       return redirect()->route('enrollments.index');  
    }
}
