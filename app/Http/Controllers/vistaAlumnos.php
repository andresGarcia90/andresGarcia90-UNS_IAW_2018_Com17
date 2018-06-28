<?php

namespace proyectoIaw\Http\Controllers;

use Illuminate\Http\Request;
use proyectoIaw\Alumno;
use proyectoIaw\Comision;
use proyectoIaw\Evaluacion;

class vistaAlumnos extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumnos= Alumno::all();
        return view('alumno.index',compact('alumnos'));
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

        $comisiones= Comision::All();
        $comisionesToReturn = array();
        $var = 0;
        foreach ($comisiones as $comision ) {
           $aux = 0; 
           $aux = $comision->integrantes;
           for ($i=0; $i < sizeof($aux); $i++) { 
               if(strcmp($id,$aux[$i])==0){
                $comisionesToReturn[$var]=$comision;
                $nombreEval=Evaluacion::find($comision->evaluacion);
                $comisionesToReturn[$var]->nombreEv=$nombreEval->name;
                $var++;
               }
           }
        }
        $alumno=Alumno::find($id);
        //return $comisionesToReturn;
        if (sizeof($comisionesToReturn) > 0 ) {
            return view('alumno.show',compact('comisionesToReturn','alumno'));
        }else{
            return view('alumno.noalumno');
        }
        
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
