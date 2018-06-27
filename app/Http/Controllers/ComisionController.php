<?php

namespace proyectoIaw\Http\Controllers;

use Illuminate\Http\Request;
use proyectoIaw\Http\Controllers\Controller;
use proyectoIaw\Comision;
use proyectoIaw\Evaluador;
use proyectoIaw\Evaluacion;
use proyectoIaw\Alumno;

class ComisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evaluadores = Evaluador::all();
        $evaluaciones = Evaluacion::all();
        $alumnos = Alumno::all();

        return view('comision.index', compact('evaluadores','evaluaciones','alumnos'));
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

        //$evaluador = Evaluador::find($request->dieval); //con esto ya tengo el evaluador
        //$evaluacion = Evaluacion::find($request->diecion);

        //es mejor guardar la referencia por actualizaciones
        //


        $alumnosstr = explode("-", $request->alumnos);

        $com = new Comision();
        $com->name = $request->input('dinom');
        
        //$com->evaluacion = Evaluacion::find($request->diecion);
        //$com->evaluador = Evaluador::find($request->dieval);


        $com->evaluacion = $request->diecion;
        $com->evaluador  = $request->dieval;


        $com->nota = [];

        $array = array();

        for ($i = 1; $i <= sizeof($alumnosstr) - 1; $i++) 
        {
            $array[$i] = Alumno::find($alumnosstr[$i]);
        }   

        $com->integrantes = $alumnosstr;

        $com->save();

        if($request -> ajax()){
            return response() -> json([
                "mensaje" => $com
                ]);

        }
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
