var eventClick = new classFunctionRegister();

$(document).ready(function(){
	$('#submit').click(function(){
		eventClick.registro();
	});
});

function classFunctionRegister(){
	this.registro = function(){

		var dato1 = $('#campo1').val();
		var dato2 = $('#campo2').val();
		var dato3 = $('#campo3').val();

		if (dato1.length == 0) {
			$('#menssageAlert').html('EL campo 1 falta llenarlo');//este es el mensaje que saldra en un div con el id menssageAlert cuando el campo este vacio
		}

		if (dato2.length == 0) {
			$('#menssageAlert').html('EL campo 2 falta llenarlo');
		}

		if (dato3.length == 0) {
			$('#menssageAlert').html('EL campo 3 falta llenarlo');
		}

		if ((dato1.length > 0) && (dato2.length > 0) && (dato3.length > 0)) { // validacion de los campos

			$.ajax({
				url:location.protocol+'://'+location.host+'/miRuta/controlador/registro.php',
				type:'POST',
				data:{
					c_campo_1: dato1, // estructura de envío en el controlador primero se le asigna un nombre como c_campo_1 
									  // despues se le asigna el valor al campo como dato1 [campo de envío en la url]:[valor que se le asigna al campo]
					c_campo_2: dato2,
					c_campo_3: dato3
				},
				success:function(data){
					if (data == true) {
						$('#menssageAlert').html('Se registro con exito');
					}
				}
			});

		}

		
	}
}





























if ($_REQUEST['boton']) { //primera validación cuando clickeas el boton llamado boton

	if (
		($_REQUEST['CampoNombre'] != null) && 
		($_REQUEST['CampoApellido'] != null)) {//segunda validación si los campos son diferentes de null o si tiene datos

		$sql = "INSERT INTO persona VALUES ('', '".$_REQUEST['CampoNombre']."', '".$_REQUEST['CampoApellido']."')";

		$query = mysqli_query($link, $sql);
		
		mysqli_close($query);


	}

}