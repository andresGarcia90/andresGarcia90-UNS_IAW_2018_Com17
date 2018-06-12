$("#registroevaluacion").click(function(){

	var nombre = $("#evalname").val();
	var fecha = $("#evaldate").val();
	var tipo = $("#evaltype").val();
	var descripcion = $("#evaldesc").val();
	

	var route = "http://localhost/proyectoIaw01/public/evaluacion";	
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		datatype: 'json',
		data: {
			name: nombre,
			date: fecha,
			type: tipo,
			desc: descripcion
		},

		success:function(){
			$("#msj-success").fadeIn();
		}
	});


});
