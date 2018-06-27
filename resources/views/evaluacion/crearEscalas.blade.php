@extends('layouts.admin')
	@section('content')

   		<h3 align="center">Crear nueva escala de notas</h3>
		{!!Form::open(['route'=>'escala.store' , 'method' => 'POST'])!!}

			<br />
				<div class="form-group">
				{!!Form::label('cabecera','Cabecera:')!!}
				{!!Form::text('cabecera',null,['name'=>'escala_kbcra','id' =>'escala_cabecera', 'class'=>'form-control','placeholder'=>'Cabecera de nueva escala'])!!}
				</div>
			<br />

			<div class="table-repsonsive">
				<span id="error"></span>
			    <table class="table table-bordered" id="item_table">
				    <tr>
					    <th>Descripcion</th>
				    	<th>Concepto</th>
					    <th>Aprobado</th>
					    <th><button type="button" name="add" id="addEsc" class="btn btn-success">Agregar Mas</button></th>
					</tr>
				</table>
			</div>

			{!!Form::submit('Guarar Escala', ['class' => 'btn btn-primary'])!!}
		{!!Form::close()!!}
		
		
	@endsection