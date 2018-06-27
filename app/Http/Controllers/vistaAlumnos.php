<?php

namespace proyectoIaw\Http\Controllers;

use Illuminate\Http\Request;
use proyectoIaw\Alumno;
use proyectoIaw\Comision;

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
        $comisionesToReturn;
        $var = 0;
        foreach ($comisiones as $comision ) {
           $aux = $comision->integrantes;
           //$nota = $comision->notas;
           //////////////////////////////////////////REEMPLAZAAAR//////////////////////////////////////////
           $nota = [1,3];
           //return sizeof($aux);
           for ($i=0; $i < sizeof($aux); $i++) { 
               if(strcmp($id,$aux[$i])==0){
                $escalaNota=find($comisiones->)
                $comisionesToReturn[$var]=$comision;
                $comisionesToReturn[$var]->notas=$nota[$i];
                $var++;
               }
           }
        }
        //return compact('comisionesToReturn');
        $alumno=Alumno::where('lastname','=','Garcia')->get();
        
        //return $alumno;
        //return compact('comisiones');
        return view('alumno.show',compact('comisiones'));
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
