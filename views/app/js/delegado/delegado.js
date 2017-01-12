$(document).ready(function(){
	resetAlertify();
	$('#setdeleg').on('click',function(e){
		e.preventDefault();
		$.ajax({
			url:'ajax.php?mode=delegado',
			type:'post',
			data:$('#frmDeleg').serialize(),
			success:function(resp){
				console.log(resp);
				if(resp==1){
					alertify.success("El registro se guardo correctamente.");
					resetForm('frmDeleg');
					carga_ajax(null,'ajax.php?mode=refresh_deleg','tb_deleg');
				}else {
					alertify.error(resp);
				}
			}
		});
	});
});
function eliminarDelegado( id )
{
	alertify.confirm("¿Está seguro que desea eliminar el registro?",function(e){
		if ( e ) {
			$.ajax({
				url:'ajax.php?mode=deldeleg',
				type:'post',
				data:'id='+id,
				success:function(resp){
					if (resp==1) {
						alertify.success("El registro se ha eliminado correctamente.");
						carga_ajax(null,'ajax.php?mode=refresh_deleg','tb_deleg');
					}else {
						alertify.error('No se pudo eliminar');
					}
				}
			});
		}
	});
}
