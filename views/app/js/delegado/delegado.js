$(document).ready(function(){
	resetAlertify();
	$('#setdeleg').on('click',function(e){

		e.preventDefault();
		$.ajax({
			beforeSend:function(){},
			url:'ajax.php?mode=delegado',
			type:'post',
			data:$('#frmDeleg').serialize(),
			success:function(resp){
				if(resp==1){
					alertify.success("Se guardo correctamente");
					carga_ajax(null,'ajax.php?mode=refresh_deleg','tb_deleg');
				}else {
					alertify.error(resp);
				}
			},
			error:function(jqXHR,estado,error){
				console.log(error);
			},
			complete:function(jqXHR,estado){
				console.log(estado);
			},
			timeout: 10000
		});
	});
});
function eliminarDelegado( id )
{
	alertify.confirm("Esta seguro que dese eliminar",function(e){
		if ( e ) {
			$.ajax({
				beforeSend:function(){},
				url:'ajax.php?mode=deldeleg',
				type:'post',
				data:'id='+id,
				success:function(resp){
					if (resp==1) {
						alertify.success(resp);
						carga_ajax(null,'ajax.php?mode=refresh_deleg','tb_deleg');
					}else {
						alertify.error('No se pudo eliminar');
					}
				},
				error:function(jqXHR,estado,error){
					console.log(error);
				},
				complete:function(jqXHR,estado){}
			});
		}else {
			alertify.success('no');
		}
	});
}
