$(document).ready(function(){

	var i = 1;
	var t = 0;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="crit[]" id="crit'+i+'" placeholder="Agrega descripcion" class="form-control" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});

	$('#addEsc').click(function(){
		t++;
		var html = '';
	   	html += '<tr>';
	   	html += '<td><input type="text" name="escala_desc[]" id="escala_desc_'+t+'" class="form-control item_name" /></td>';
	   	html += '<td><input type="text" name="escala_concepto[]" id="escala_concepto_'+t+'" class="form-control item_quantity" /></td>';
	   	html += '<td><select name="escala_aprobado[]" id="escala_aprobado_'+t+'" class="form-control item_unit"><option value="aprobado">Aprobado</option><option value="desaprobado">Desaprobado</option></select></td>';
	   	html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove">REMOVER</button></td></tr>';
		$('#item_table').append(html);   
		//$('#item_table').append('<tr id="row'+t+'"><td><input type="text" name="crit[]" id="crit'+t+'" placeholder="Agrega descripcion" class="form-control" /></td><td><button type="button" name="remove" id="'+t+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});

	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id");
		$('#row'+button_id+'').remove();
	});

	//funcion que toma los valores de los campos del formulario, los ordena y los envia al server
	//para ser almacenados
	$("#registroevaluacion").click(function(){

		var nombre = $("#evalname").val();
		var fecha = $("#evaldate").val();
		var tipo = $("#evaltype").val();
		var descripcion = $("#evaldesc").val();
		
		var addcrit2 = $("#crit1").val();

		var escala = $("#escal").val();

		var criterios="";

		for (var j = 1; j <=i; j++) {
			if ($("#crit"+j).val() != null) 
			{
				criterios += $("#crit"+j).val() + "-";
			}
		}

		console.log(criterios);

		var route = "/evaluacion";	
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
				desc: descripcion,
				esc: escala,
				crit: criterios
			},

			success:function(){
				$("#msj-success").fadeIn();
			}
		});


	});


	$("#crearescala").click(function(){

		var cabecera = $("#escala_cabecera").val();


		for (var j = 1; j <=t; j++) {
			
			if ($("#escala_desc_"+j).val() != null) 
			{
				console.log($("#escala_desc_"+j).val());
			}
			if ($("#escala_concepto_"+j).val() != null) 
			{
				console.log($("#escala_concepto_"+j).val());
			}
			if ($("#escala_aprobado_"+j).val() != null) 
			{
				console.log($("#escala_aprobado_"+j).val());
			}
			
		}
		

	});


	$(document).on('click', '.remove', function(){
  		$(this).closest('tr').remove();
 	});



	// $('#addEsc').click(function(){
	//   var html = '';
	//   html += '<tr>';
	//   html += '<td><input type="text" name="item_name[]" class="form-control item_name" /></td>';
	//   html += '<td><input type="text" name="item_quantity[]" class="form-control item_quantity" /></td>';
	//   html += '<td><select name="item_unit[]" class="form-control item_unit"><option value="">Select Unit</option><?php echo fill_unit_select_box($connect); ?></select></td>';
	//   html += '<td><button type="button" name="remove" class="btn btn-danger btn-sm remove"><span class="glyphicon glyphicon-minus"></span></button></td></tr>';
	//   $('#item_table').append(html);
	//  });
	 
	//  $(document).on('click', '.remove', function(){
	//   $(this).closest('tr').remove();
 // 	});
 


});
