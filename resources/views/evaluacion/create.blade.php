@extends('layouts.admin')
	@section('content')
		{!!Form::open()!!}

			<div id="msj-success" class="alert alert-success alert-dismissible" role="alert" style="display:none">
					<strong> Evaluacion Generada correctamente.</strong>		
			</div>

			<input type="hidden" name="_token" value=" {{ csrf_token() }}" id = "token">

			<div class="form-group">
				{!!Form::label('nombre','Nombre:')!!}
				{!!Form::text('name',null,['id' =>'evalname','class'=>'form-control','placeholder'=>'Nombre de la Evaluacion'])!!}
			</div>

			<div class="form-group">
				{!!Form::label('fecha','fecha:')!!}
				{!!Form::date('date', \Carbon\Carbon::now(), ['id'=>'evaldate','class'=>'form-control'] )!!}
			</div>

			<div class="form-group">
				{!!Form::label('nombre','Tipo De Evaluacion:')!!}
				{!! Form::select('tipoeval', ['Parcial' => 'Parcial', 'Final' => 'Final', 'Proyecto' => 'Proyecto', 'Recuperatorio' => 'Recuperatorio'], null, ['id'=>'evaltype','class'=>'form-control','placeholder' => 'Tipo de evaluacion']) !!}
			</div>

			<div class="form-group">
				{!!Form::label('descripcion','Descripcion:')!!}
				{!!Form::text('descripcion',null,['id' =>'evaldesc','class'=>'form-control','placeholder'=>'Descripcion'])!!}
			</div>
			{!!link_to('#' , $title = "Registrar Evaluacion", $attributes = ['id' =>'registroevaluacion', 'class'=> 'btn btn-primary', $secure = null])!!}

		{!!Form::close()!!}
	@endsection
