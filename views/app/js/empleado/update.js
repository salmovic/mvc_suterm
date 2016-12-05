/**
* Funcion para actualizar datos del empleado
*/
function updateEmpleado( rpe ) {
	$.ajax({
		url:'ajax.php?mode=upempleado',
		type:'POST',
		data:'rpe='+rpe,
		success:function(resp) {
			if(resp!=1){
				alertify.error("Ocurrio algun error");
				return;
			}
			window.open('index.php?views=updateemp', '_blank');
		}
	});
}
