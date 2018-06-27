<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/metisMenu.min.css')!!}
    {!!Html::style('css/sb-admin-2.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
</head>

<body>

    <div id="wrapper">

        
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://localhost/proyectoIaw01/public/alumnos">Alumno</a>
            </div>
           

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="/proyectoIaw01/public/usuario/create"><i class="fa fa-users fa-fw"></i> Agregar Alumno<span class="fa arrow"></span></a>
                        </li>
                        <li>
                            <a href="/proyectoIaw01/public/evaluador/create"><i class="fa fa-film fa-fw"></i> Agrear Evaluador<span class="fa arrow"></span></a>
                        </li>

                        <li>
                            <a href="/proyectoIaw01/public/evaluacion/create"><i class="fa fa-child fa-fw"></i>Evaluaciones<span class="fa arrow"></span></a>
                            <ul class="sidenav-second-level collapse" id="collapseComponents">
                                <li>
                                  <a href="/proyectoIaw01/public/evaluacion/create">Crear Evaluacion</a>
                                </li>
                                <li>
                                  <a href="/proyectoIaw01/public/mostrarEscalas">Mostrar Escalas</a>
                                </li>
                                <li>
                                  <a href="/proyectoIaw01/public/evaluacion/create">Crear Evaluacion</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="/proyectoIaw01/public/comision"><i class="fa fa-child fa-fw"></i> Crear Comision<span class="fa arrow"></span></a>
                        </li>

                         <li>
                            <a href="#"><i class="fa fa-child fa-fw"></i>Publicar Evaluaciones<span class="fa arrow"></span></a>
                        </li>

                    </ul>
                </div>
            </div>

     </nav>

        <div id="page-wrapper">
        <hr>
        	<table class="table table-responsive">
        		<thead>
        			<tr>
        				<th>Apellido</th>
        				<th>Nombre</th>
        				<th>LU</th>
        				<th>Datos</th>
        			</tr>

        		</thead>
        		<tbody>
		        	@foreach($alumnos as $alumno)
		        	<tr>
		        		<td>{{$alumno->lastname}}</td>
		        		<td>{{$alumno->name}}</td>
		        		<td>{{$alumno->lu}}</td>
		        		<td><a href="alumnos/{{$alumno->_id}}" class="btn btn-primary">ingresar</a></td>
		        		
		        	</tr>
		        	@endforeach
        			
        		</tbody>

        	</table>



        	@yield('content')
        </div>

    </div>
        


    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/script.js')!!}
    {!!Html::script('js/agregarAlumno.js')!!}
    {!!Html::script('js/agregarEvaluacion.js')!!}
    {!!Html::script('js/agregarComision.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}

</body>

</html>