@extends('layouts.admin')


@section('title' , 'Escalas de notas')

@section('content')

		@foreach($escalas as $escala)

			<label>{{$escala->cabecera}}</label>

			<table class="table table-bordered" id="dynamic_field">
				<tr>
					<td>
						{!!Form::label('descripcion','Descripcion')!!}
					</td>
					<td>
						{!!Form::label('concepto','Concepto')!!}
					</td>
				</tr>

				@for ($i = 0; $i < sizeof($escala->descripcion); $i++)
					<tr>
						<td>{{$escala->descripcion[$i]}}</td>
						<td>{{$escala->concepto[$i]}}</td>
					</tr>
				@endfor

			</table>
			
			
		@endforeach

@endsection()