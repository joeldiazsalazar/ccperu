<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Payment;

class ReportsController extends Controller
{
    public function getUltimoDiaMes($elAnio,$elMes) {
     return date("d",(mktime(0,0,0,$elMes+1,1,$elAnio)-1));
    }


    public function registros_m($anio,$mes,$estado)
    {
        $primer_dia=1;
        $ultimo_dia=$this->getUltimoDiaMes($anio,$mes);
        $fecha_inicial=date("Y-m-d", strtotime($anio."-".$mes."-".$primer_dia) );
        $fecha_final=date("Y-m-d", strtotime($anio."-".$mes."-".$ultimo_dia) );
        $selector = $estado;
        $pagos=Payment::whereBetween('periodo_inicio', [$fecha_inicial,  $fecha_final])->where('estado',$selector)->get();
        
        $suma=Payment::whereBetween('periodo_inicio', [$fecha_inicial,  $fecha_final])->where('estado',$selector)->sum('monto');
        // $total=Payment::whereBetween('periodo_inicio', [$fecha_inicial,  $fecha_final])->where('estado',$selector)->sum('monto')->get();

        // $data=array("registros"=>$pagos);
        return   json_encode(array(

                'registros' => $pagos,
                'suma' => $suma
        ));


        

    }


    public function index()
    {   
        $anio=date("Y");
        $mes=date("m");
        $estado = "Seleccione";
        return view("report.index")
               ->with("anio",$anio)
               ->with("mes",$mes)
               ->with("estado",$estado);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        //
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
        //
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
}
