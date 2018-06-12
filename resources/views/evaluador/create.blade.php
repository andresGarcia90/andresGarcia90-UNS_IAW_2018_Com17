@extends('layouts.admin')
	@section('content')

		{!!Form::open()!!}

			<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
				<strong> Evaluador agregado correctamente.</strong>		
			</div>

			<input type="hidden" name="_token" value=" {{ csrf_token() }}" id = "token">

			<div class="form-group">
				{!!Form::label('nombre','Nombre:')!!}
				{!!Form::text('name',null,['id' =>'evdorname','class'=>'form-control','placeholder'=>'Nombre del usuario'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('apellido','Apellido:')!!}
				{!!Form::text('lastname',null,['id' =>'evdorlastname', 'class'=>'form-control','placeholder'=>'Apellido del usuario'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('password','Contraseña:')!!}
				{!!Form::password('password',['id' =>'evdorpsw','class'=>'form-control','placeholder'=>'Contraseña'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('email','Correo:')!!}
				{!!Form::text('email',null,['id' =>'evdoremail','class'=>'form-control','placeholder'=>'ejemplo@cs.uns.edu.ar'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('dni','DNI:')!!}
				{!!Form::text('dni',null,['id' =>'evdordni','class'=>'form-control','placeholder'=>'DNI del usuario'])!!}
			</div>

			{!!link_to('#' , $title = "Registrar Evaluador", $attributes = ['id' =>'registroevaluador', 'class'=> 'btn btn-primary', $secure = null])!!}
		{!!Form::close()!!}
		
	@endsection
