@extends('layouts.admin')


@section('title' , 'evaluadorUser')

@section('content')

<br>

<h2>Titulo: {{$evaluacion->name}}</h2>
<h3>Comision: {{$comision->name}}</h3>
<h3>Evaluador: {{$evaluador->lastname}} {{$evaluador->name}}</h3>
<textarea id="comisionID" style="display: none">{{$comision->_id}}</textarea>
<br>


<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display: none">
            <strong>Clalificación realizada!</strong>
        </div>


          <div class="form-horizontal">
            <h3>Escala de notas:</h3>
              <!--
                {!!Form::select('descripcion', $escalas->pluck('descripcion')->all()  , null, ['id'=>'comeval','class'=>'form-control','placeholder' => 'Seleccione descripcion'])!!}
                -->
          </div>

          <table class="table table table-responsive table-sortable table-striped table-bordered">
              <thead>
                  <th>Descripcion</th>
                  <th>Concepto</th>
                  <th>Nota</th>
              </thead>
              <tbody>
                @for($i=0;$i<count($escalas->descripcion);$i++)
                     <tr>
                          <th>{{$escalas->descripcion[$i]}}</th>
                          <th>{{$escalas->concepto[$i]}}</th>
                          <th>{{$escalas->aprobado[$i]}}</th>
                     </tr>
                @endfor
              </tbody>

          </table>

	  	<table id="tabla-calificacion" class="table table table-responsive table-sortable table-striped table-bordered">
        		<thead>
        			<tr>
                        <th>Alumnos</th>
                        <th>Evaluación</th>
        			</tr>

{!!Form::open()!!}
                   
                    <input type="hidden" name="_token" value="{{csrf_token()}}" id="token">

                        @for ($i = 0; $i < sizeof($alumnos); $i++)
                         <tr>
                            <td>{{$alumnos[$i]->name}}, {{$alumnos[$i]->lastname}} </td>
                            <td>
                                {!!Form::select('descripcion', $escalas->descripcion, null, ['id'=>'notaAlumno'.$i,'class'=>'form-control','placeholder' => 'Seleccione descripcion'])!!}
                            </td>
                         </tr>
                         @endfor
                        
                </tbody>

            </table>
            

                        <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="submit"></label>
              <div class="col-md-8">
                {!!link_to('#', $title='Calificacion', $atributos = ['id' => 'registro', 'class' => 'btn btn-primary'], $secure = null)!!}
                <button id="submit" name="submit" class="btn btn-primary" value="1">Calificar</button>
                <a href="/proyectoIaw01/public/evaluadorUser/{{$evaluador->_id}}" id="cancel" name="cancel" class="btn btn-default">Cancel</a>
              </div>
            </div>

          {!!Form::close()!!}

            
@endsection()

