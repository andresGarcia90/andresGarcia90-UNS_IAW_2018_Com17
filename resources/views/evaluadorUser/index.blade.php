@extends('layouts.admin')


@section('title' , 'evaluadorUser')

@section('content')
	  	<table class="table table-responsive">
        		<thead>
        			<tr>
        				<th>Apellido</th>
        				<th>Nombre</th>
        				<th>Mail</th>
        				<th>Perfil</th>
        			</tr>

        		</thead>
        		<tbody>
		        	@foreach($evaluadores as $evaluador)
		        	<tr>
		        		<td>{{$evaluador->lastname}}</td>
		        		<td>{{$evaluador->name}}</td>
		        		<td>{{$evaluador->email}}</td>
		        		<td><a href="evaluadorUser/{{$evaluador->_id}}" class="btn btn-primary">ingresar</a></td>
		        		
		        	</tr>
		        	@endforeach
        			
        		</tbody>	

        	</table>
	
@endsection()

