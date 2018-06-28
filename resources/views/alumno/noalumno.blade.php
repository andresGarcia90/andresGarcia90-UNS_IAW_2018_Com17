@extends('layouts.admin')


@section('title' , 'alumnoShow')

@section('content')

{!!Form::label('nombre','El alumno no esta anotado en ninguna comision')!!}
                <a href="/alumnos" id="cancel" name="cancel" class="btn btn-default"> Volver </a>

@endsection()