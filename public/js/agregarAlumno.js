$("#registroalumno").click(function(){

	var nombre = $("#alname").val();
	var apellido = $("#allastname").val();
	var psw = $("#alpsw").val();
	var email = $("#alemail").val();
	var alu = $("#alu").val();

	var route = "http://localhost/proyectoIaw01/public/usuario";	
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
			lu: alu
		},

		success:function(){
			$("#msj-success").fadeIn();
		}
	});


});
