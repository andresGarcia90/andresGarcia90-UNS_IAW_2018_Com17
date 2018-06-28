<?php

namespace proyectoIaw\Http\Controllers;

use Illuminate\Http\Request;
use proyectoIaw\Evaluador;
use proyectoIaw\Evaluacion;
use proyectoIaw\Comision;
use Carbon\Carbon;


class evaluadorUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluadores = Evaluador::all();
        return view('evaluadorUser.index',compact('evaluadores'));
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
        $comisiones = Comision::where('evaluador','=',$id)->get();
        $carbon = new Carbon();
        $carbon = Carbon::now();
        //$carbon = $carbon->format('Y-m-d');
        $carbon2 = new Carbon();
        $carbon2 = Carbon::now();
        $c= $carbon2 >= $carbon;
        //return compact('c');
        
        foreach ($comisiones as $comision) {
            $evaluacion = Evaluacion::find($comision->evaluacion);
            $comision['nombreEvaluacion']= $evaluacion->name;
            $comision['fecha']= $evaluacion->fecha;
            $comision['tipo']= $evaluacion->tipo;
            $c= $evaluacion->fecha > $carbon;
            $comision['evaluable'] = $c;
        }



        //return $comisiones;
        return view('evaluadorUser.show', compact('comisiones'));

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
