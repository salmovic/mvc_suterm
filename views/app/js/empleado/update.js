function updateEmpleado( rpe ) {
	$.ajax({
		url:'ajax.php?mode=upempleado',
		type:'POST',
		data:'rpe='+rpe,
		success:function( resp ) {
			if( resp != 1 ) {
				alertify.alert( 'Ocurrio un error* '+resp );
			}
			window.open('index.php?views=updateemp', '_blank');
		}
	});
}
