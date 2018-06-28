var i = 0;

$("#registro").click(function(){
	var id = $("#comisionID").val();

	//console.log('llego aca');
	console.log(id);
	
	var obj=[{}];;
	var dato = $("#notaAlumno").val();
	var token = $("#token").val();
	console.log(dato);
	var route = "/calificacion/"+dato+"";
	
	console.log(route);

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'PUT',
		datatype: 'json',
		data:{
				nota: dato,
				comid: id
			},
			
		success:function(){
			$("#msj-success").fadeIn();
		}
		
	});


});