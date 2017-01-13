function updateEmpleado( rpe ) {
	$.ajax({
		url:'ajax.php?mode=upempleado',
		type:'POST',
		data:'rpe='+rpe,
		success:function( resp ) {
			if( resp != 1 ) {
				alertify.error( 'Eerror inesperado: '+resp );
			}
			$(location).attr('href','index.php?views=updateemp');
		}
	});
}

//Eliminar un empleado
function eliminarEmpleado( rpe ) {
	console.log(rpe);
	alertify.confirm('¿Está seguro que desea eliminar el registro?',function(e){
		if(!e) return;
		$.ajax({
			url:'ajax.php?mode=deleteemp',
			type:'post',
			data:'rpe='+rpe,
			success:function( resp ){
				if(resp!=1) {
					alertify.error("No se pudo eliminar el empleado.");
					return;
				}
					alertify.error("El empleado se ha eliminado correctamente.");
					$(location).attr('href','index.php?views=searchemp');
			}
		});

	});
}
