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

			<div class="form-group">
				<label>Seleccione Escala</label>
				{!!Form::select('escala', $escalas->pluck('cabecera', 'id')->all()  , null, ['id'=>'escal','class'=>'form-control','placeholder' => 'Seleccione escala'])!!}


			</div>

			{!!Form::label('criterio','Criterios:')!!}
			<div class="table-responsive">
				<table class="table table-bordered" id="dynamic_field">
					<tr>
						<td>
							<input type="text" name ="crit[]" id="crit1" placeholder="Ingrese criterio de evaluacion" class="form-control"/>
						</td>
						<td>
							<button type="button" name="add" id="add" class="btn btn-success">Agregar Mas</button>
						</td>
					</tr>
				</table>
			</div>
			

			{!!link_to('#' , $title = "Registrar Evaluacion", $attributes = ['id' =>'registroevaluacion', 'class'=> 'btn btn-primary', $secure = null])!!}

		{!!Form::close()!!}
	@endsection
