@extends('layouts.admin')
	@section('content')

		{!!Form::open()!!}

			<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
				<strong> Alumno agregado correctamente.</strong>		
			</div>

			<input type="hidden" name="_token" value=" {{ csrf_token() }}" id = "token">

			<div class="form-group">
				{!!Form::label('nombre','Nombre:')!!}
				{!!Form::text('name',null,['id' =>'alname','class'=>'form-control','placeholder'=>'Nombre del usuario'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('apellido','Apellido:')!!}
				{!!Form::text('lastname',null,['id' =>'allastname','class'=>'form-control','placeholder'=>'Apellido del usuario'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('password','Contraseña:')!!}
				{!!Form::password('password',['id' =>'alpsw','class'=>'form-control','placeholder'=>'Contraseña'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('email','Correo:')!!}
				{!!Form::text('email',null,['id' =>'alemail','class'=>'form-control','placeholder'=>'ejemplo@cs.uns.edu.ar'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('lu','LU:')!!}
				{!!Form::text('lu',null,['id' =>'alu','class'=>'form-control','placeholder'=>'LU del usuario'])!!}
			</div>

			{!!link_to('#' , $title = "Registrar Alumno", $attributes = ['id' =>'registroalumno', 'class'=> 'btn btn-primary', $secure = null])!!}
		{!!Form::close()!!}
		
	@endsection
