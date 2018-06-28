
$("#registroevaluador").click(function(){

	var nombre = $("#evdorname").val();
	var apellido = $("#evdorlastname").val();
	var psw = $("#evdorpsw").val();
	var email = $("#evdoremail").val();
	var dni = $("#evdordni").val();

	var route = "/evaluador";	
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		datatype: 'json',
		data: {
			name: nombre,
			lastname: apellido,
			password: psw,
			mail: email,
			documento: dni
		},

		success:function(){
			$("#msj-success").fadeIn();
		}
	});


});



