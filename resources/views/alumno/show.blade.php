@extends('layouts.admin')


@section('title' , 'alumnoShow')

@section('content')

<br>




          <table class="table table table-responsive table-sortable table-striped table-bordered">
              <thead>
                  <th>Evaluacion</th>
                  <th>Comision</th>
                  <th>Nota</th>
              </thead>
              <tbody>
          @foreach($comisionesToReturn as $comision)
  					<tr>
              <td>{{$comision->nombreEv}}</td>
  						<td>{{$comision->name}}</td>
  						<td>{{$comision->nota}}</td>
  					</tr>
				 @endforeach
              </tbody>

          </table>

@endsection()
