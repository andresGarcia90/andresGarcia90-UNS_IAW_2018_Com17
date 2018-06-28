$("#registrocomision").click(function(){

	var idEvaluador = $("#comeval").val();
	var idEvaluacion = $("#comevcion").val();
	var idNombreCom = $("#comname").val();

	var route = "/comision";	// "./" para que no se queje 
	var token = $("#token").val();

	var sList = "";
    $('input[type=checkbox]').each(function () {
    	if($(this).prop('checked')){
    		sList += $(this).attr('name') + "-";
    	}
	});

	sList = sList.substr(0, sList.length -1);
	console.log (sList);

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		datatype: 'json',
		data: {
			dinom: idNombreCom,
			dieval: idEvaluador,
			diecion: idEvaluacion,
			alumnos: sList
		},

		success:function(){
			$("#msj-success").fadeIn();
		}
	});


});
