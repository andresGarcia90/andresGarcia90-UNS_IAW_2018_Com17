$("#registrocomision").click(function(){

	var idEvaluador = $("#comeval").val();
	var idEvaluacion = $("#comevcion").val();
	

	var route = "http://localhost/proyectoIaw01/public/comision";	
	var token = $("#token").val();

	var sList = "";
    $('input[type=checkbox]').each(function () {
    	sList += $(this).attr('name') + "-";
	});
console.log (sList);

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		datatype: 'json',
		data: {
			dieval: idEvaluador,
			diecion: idEvaluacion,
			alumnos: sList
		},

		success:function(){
			$("#msj-success").fadeIn();
		}
	});


});
