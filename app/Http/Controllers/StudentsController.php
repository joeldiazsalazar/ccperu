<?php

namespace App\Http\Controllers;
use App\Http\Requests\ValidateStudentRequest;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\User;
use App\Student;
use App\Role;
use App\Attorney;
use App\Enrollment;
use App\Programming;
use App\Detail;
use App\Qualification;
use App\Course;

use Alert;

class StudentsController extends Controller
{


    public function index()
    {


        $students = Student::where('estado','activo')->paginate(10);

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
    public function store(ValidateStudentRequest $request)
    {
        Student::create($request->all());
        User::create($request->all());

        // alert()->success('Rol Creado')->persistent("Cerrar");
        Alert::success('<a href="/students/create/">Desea agregar otro alumno?</a>')->html()->persistent("No, Gracias");

        // Redireccionar mensaje
        return redirect()->route('students.index');  
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
    public function update(ValidateStudentRequest $request, $id)
    {
        $students = Student::findOrFail($id);

        $students->update($request->all());
        
        Alert::success('Alumno actualizado satisfactoriamente', 'Success')->persistent("Close");

        return redirect()->route('students.index');  
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


    //details

        public function index_detail($id)

        {

        $enroll = Enrollment::all()->where('user_id',$id);

         foreach ($enroll as $enrollment) {
             
              $then = $enrollment->programming->id;
         }
         
            $dett = Detail::all()->where('programming_id', $then);

            return view('student.detail.index',compact('dett'));
        }

      public function show_detail($id)
    {

        $as = Enrollment::all()->where('user_id',$id);

        return view('student.detail.show',compact('as'));
    }


      public function detail($id)
    {

         $as = Enrollment::all()->where('user_id',$id);

         foreach ($as as $enrollment) {
             
              $then = $enrollment->programming->id;
         }
         
         $detalles = Detail::all()->where('programming_id', $then)->where('day','lunes');

         $det_mart = Detail::all()->where('programming_id', $then)->where('day','martes');

         $det_mier = Detail::all()->where('programming_id', $then)->where('day','miercoles');

         $det_juev = Detail::all()->where('programming_id', $then)->where('day','jueves');

         $det_vier = Detail::all()->where('programming_id', $then)->where('day','viernes');

        return view('student.detail.detail',compact('as','detalles','det_mart','det_mier','det_juev','det_vier'));
    }

        public function prog($id)
    {


        $as = Enrollment::all()->where('user_id',$id);



         foreach ($as as $enrollment) {
             
              $then = $enrollment->id;
            
         }

         // foreach ($as as $key) {
         //     $var = $key->programming->id;
             
         // }

         // $deta = Detail::all()->where('programming_id', $var );


         // foreach ($deta as $det) {
         //     $mos  = $det->course->id;
         // }

         // dd($mos);
         // $course = Course::all();

         // foreach ($course as $key) {
         //    $x[] = $key->id;
         // }
            

         
        $qualification = Qualification::all()->where('enrollment_id', $then)->where('trimester_id', '1')->sortBy("course_id");

        return view('student.detail.prog',compact('qualification'));
    }

}
