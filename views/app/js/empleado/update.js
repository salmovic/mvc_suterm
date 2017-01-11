function updateEmpleado( rpe ) {
	console.log(rpe);
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
	alertify.confirm('¿Está seguro que desea eliminar el registro?',function(e){
		if(!e) return;
		alertify.success('OK: '+rpe);
	});
}
