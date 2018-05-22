<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{






      public function docente(){
    	return view('docente.index');
    	} 



      public function apoderado(){
    	return view('apoderado.index');
    	} 


}
