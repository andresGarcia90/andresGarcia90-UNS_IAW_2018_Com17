@extends('layouts.admin')


@section('title' , 'evaluadorUser')

@section('content')
	  	<table class="table table-responsive table-sortable">
        		<thead>
        			<tr>
                                        <th>Fecha</th>
                                        <th>Evaluación</th>
        				<th>Comisión</th>
        				<th>Tipo</th>
        				<th>Acciones</th>
        				
        			</tr>


        		</thead>
        		<tbody>
		        	@foreach($comisiones as $comision)
		        	<tr>
                                        <td>{{$comision->fecha}}</td>
		        		<td>{{$comision->nombreEvaluacion}}</td>
                                        <td>{{$comision->name}}</td>
		        		<td>{{$comision->tipo}}</td>
		        		<td>

                                                @if($comision->evaluable)
                                                  <a href="/proyectoIaw01/public/calificacion/{{$comision->_id}}" class="btn btn-danger">Calificar</a>
                                                        
                                                @endif
                                                <div class="btn-group" role="group" aria-label="...">
                                                  <a href="/proyectoIaw01/public/evaluador/create" class="btn btn-success">Ver</a>
                                                </div>

                                        </td>
                                        
                                        		        				        		
		        	</tr>
		        	@endforeach
        			
        		</tbody>

        	</table>
	
@endsection()

