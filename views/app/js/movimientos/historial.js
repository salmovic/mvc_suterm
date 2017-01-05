function imprimirPDF( folio ){
	$.ajax({
		url:'ajax.php?mode=showpdf',
		type:'post',
		data:'folio='+folio,
		success:function( resp ) {
			if( resp !=1 ){
				alertify.error("No se pude visualizar el movimiento en estos momentos, vuelva intentarlo mas tarde.");
				return;
			}
			window.open('index.php?views=pdf', '_blank');
			// window.open('index.php?views=pdf2', '_blank');
		}
	});
}
/**
* Eliminar un movimiento
*/
function deleteMovimiento(id) {
	alertify.confirm('¿Esta seguro que desea eliminar?',function(e){
		if( e ) {
			$.ajax({
				url:'ajax.php?mode=delete_mov',
				type:'post',
				data:'id='+id,
				success:function(resp){
					console.log(resp);
					if(resp!=1){
						alertify.error('No se pudo eliminar el movimiento'+resp);
						return;
					}
					alertify.success('Se elimino correctamente');
					carga_ajax(0,'ajax.php?mode=refresh_buscar','tb_historial');
				}
			});
		}
	});
}
