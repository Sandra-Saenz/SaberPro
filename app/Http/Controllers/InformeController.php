<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Informe;


class InformeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $tinforme = Informe::join('detalle-informe-competencia-general', 'informe.id', '=', 'detalle-informe-competencia-general.informe_id')
        ->join('detalle-informe-competencia-especifica', 'informe.id', '=', 'detalle-informe-competencia-especifica.informe_id')
        ->get();


        $cinforme = Informe::select(\DB::raw('COUNT(*) as count'))
        ->pluck('count');

        $productos = Informe::select(\DB::raw('COUNT(*) as count'))
            ->whereYear('fecha' , date('Y'))
            ->groupBy(\DB::raw('Month(fecha)'))
            ->pluck('count');




        $dinforme = Informe::join('detalle-informe-competencia-general', 'informe.id', '=', 'detalle-informe-competencia-general.informe_id')
        ->select('detalle-informe-competencia-general.puntaje_global')
        ->get();


        $n = 0;
        $d1 = 0;
        $d2 = 0;
        $d3 = 0;
        $d4 = 0;
        $d5 = 0;
        $d6 = 0;

        foreach ($dinforme as $dinforme) {
            if ($dinforme->puntaje_global <= 50) {
                $d1++;
            }elseif ($dinforme->puntaje_global > 50 && $dinforme->puntaje_global <= 100) {
               $d2++;
            }elseif ($dinforme->puntaje_global > 100 && $dinforme->puntaje_global <= 150) {
                $d3++;
            }elseif ($dinforme->puntaje_global > 150 && $dinforme->puntaje_global <= 200) {
                $d3++;
            }elseif ($dinforme->puntaje_global > 200 && $dinforme->puntaje_global <= 250) {
                $d4++;
            }else{
                $d5++;
            }
        }

        $array = array($d1, $d2, $d3, $d4, $d5);

        return view('Inicio/InfoGene', compact('tinforme', 'productos', 'cinforme' , 'dinforme', 'array'));
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

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $informe = Informe::where('informe.evaluacion_id','=',$id)
        ->join('detalle-informe-competencia-general', 'informe.id', '=', 'detalle-informe-competencia-general.informe_id')
        ->join('detalle-informe-competencia-especifica', 'informe.id', '=', 'detalle-informe-competencia-especifica.informe_id')
        ->get();
        //return $informe;
        return view('Inicio/infoEspe', compact('informe'));
    }

    public function showIndividual($numero_Documento)
    {
        $informeP =  Informe::where('informe.evaluacion_id','=',$numero_Documento)
        ->join('detalle-informe-competencia-general', 'informe.id', '=', 'detalle-informe-competencia-general.informe_id')
        ->join('detalle-informe-competencia-especifica', 'informe.id', '=', 'detalle-informe-competencia-especifica.informe_id')
        ->get();
        //return $informeP;
        return view('Inicio/mysResultados', compact('informeP'));
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
