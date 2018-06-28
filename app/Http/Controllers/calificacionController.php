<?php

namespace proyectoIaw\Http\Controllers;

use Illuminate\Http\Request;
use proyectoIaw\Evaluador;
use proyectoIaw\Evaluacion;
use proyectoIaw\Comision;
use proyectoIaw\Escala;
use proyectoIaw\Alumno;

class calificacionController extends Controller
{
    public $ComisionID;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'ok';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $id = $this->getComisionID();
        $comision = Comision::find($id);
        $newComision = new Comision();
        $evaluacion = Evaluacion::find($comision->evaluacion);
        $escala = Escala::find($evaluacion->escala);
        $notaToReturn = $escala->descripcion[$request->nota]; 
       // $comision->fill(nota->$notaToReturn);
        $newComision->nota = $notaToReturn;
        $newComision->save();

        $val=  $request->all();
        if($request->ajax()){
            return response()->json([
                "mensaje"=> $request->all()]);
        }

        return compact('comision');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comision = Comision::find($id);
        $this->setComisionID($id);
        $evaluacion = Evaluacion::find($comision->evaluacion);
        $evaluador = Evaluador::find($comision->evaluador);
        $escalas = Escala::find($evaluacion->escala);
        $arr = json_encode($comision->integrantes);
        for ($i=0; $i < 2; $i++) { 
            $alumnos[$i]=Alumno::find($comision->integrantes[$i]);
        }
        //(return $arreglo;
        return view('calificacion.show', compact('comision','evaluacion','escalas','evaluador','alumnos'));
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
       
     

      $com = Comision::find($request->comid);
      $com-> nota = $id;
      $com->save();
     
       
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

    public function setComisionID($id){
        $this->ComisionID = $id;

    }

    public function getComisionID(){
        $id = $this->ComisionID;
        return compact("id");
    }
}
