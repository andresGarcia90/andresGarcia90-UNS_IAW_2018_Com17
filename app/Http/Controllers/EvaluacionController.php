<?php

namespace proyectoIaw\Http\Controllers;

use Illuminate\Http\Request;
use proyectoIaw\Http\Controllers\Controller;
use proyectoIaw\Evaluacion;
use proyectoIaw\Escala;
class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.admin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $escalas = Escala::All();

        return view('evaluacion.create',compact('escalas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $evaluacion = new Evaluacion();
        $evaluacion->name =$request->input('name');
        $evaluacion->fecha =$request->input('date');
        $evaluacion->tipo =$request->input('type');
        $evaluacion->descripcion =$request->input('desc');
        $evaluacion->escala= $request->input('esc');
        $evaluacion->criterios= $request->input('crit');
        $evaluacion->save();
      
        if($request -> ajax())
        {
            return response() -> json([
                "mensaje" => $request->all()
                ]);
        }

        return view('layouts.admin');
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


    public function mostrarEscalas()
    {
        $escalas = Escala::All();
        //print_r($escalas);
        //die();
        return view('evaluacion.showEscalas',compact('escalas'));   
    }


    public function crearEscalas()
    {
        //$escalas = Escala::All();
        //print_r($escalas);
        //die();
        return view('evaluacion.crearEscalas');   
    }

  

}
