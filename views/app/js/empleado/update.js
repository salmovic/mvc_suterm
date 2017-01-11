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
			window.open('index.php?views=updateemp', '_blank');
		}
	});
}

//Eliminar un empleado
function eliminarEmpleado( rpe ) {
	alertify.confirm('¿Está seguro que desea eliminar?',function(e){
		if(!e) return;
		alertify.success('OK: '+rpe);
	});
}
