@extends('layouts.app')


@section('title' , 'Trainers create')

@section('content')
	<form class="form-group" method="POST" action="/proyectoIaw01/public/trainers">
	@csrf
		<div class="form-group">

			<label>Nombre</label>
			<input type="text" name="name">
			<button type="submit" class="btn btn-primary">Guardar</button>
		
		</div>
	</form>
@endsection()


