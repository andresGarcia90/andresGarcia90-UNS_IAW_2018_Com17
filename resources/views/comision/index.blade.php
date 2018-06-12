@extends('layouts.admin')


@section('title' , 'Administrador')

@section('content')
	{!!Form::open()!!}
	
		<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
						<strong> BUENISIMO.</strong>		
		</div>

		<input type="hidden" name="_token" value=" {{ csrf_token() }}" id = "token">

		{!!Form::select('evaluador', $evaluadores->pluck('name', 'id')->all()  , null, ['id'=>'comeval','class'=>'form-control','placeholder' => 'Seleccione evaluador'])!!}
		<hr>
		{!!Form::select('evaluacion', $evaluaciones->pluck('name', 'id')->all()  , null, ['id'=>'comevcion','class'=>'form-control','placeholder' => 'Seleccione evaluacion'])!!}
		
		<hr>
		
		<label>Seleccion alumnos pertenecientes a la comision</label>

		@foreach($alumnos as $id => $name)
    		<div class="checkbox">
		        <label>
		            {!! Form::checkbox($name->id, $id) !!} {{$name->name}}
		        </label>
   			<div>
		@endforeach

		<hr>

		{!!link_to('#' , $title = "Registrar Comision", $attributes = ['id' =>'registrocomision', 'class'=> 'btn btn-primary', $secure = null])!!}



	{!!Form::close()!!}

@endsection()

