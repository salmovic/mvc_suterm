$(document).ready(function()
{
	resetAlertify();
	/**
	* Enviar formulario centro_trabajo
	*/
	$('#setCenTrab').on("click", function(e)
	{
			e.preventDefault();
			$.ajax(
			{
				url: 'ajax.php?mode=set_centrab',
				type: 'post',
				data: $('#frmCenTrabajo').serialize(),
				success: function(resp){
					if( resp == 1)
					{
						alertify.success('Se ha guardado correctamente.');
						resetForm('frmCenTrabajo');
						$('input').css('border',"");
						carga_ajax(null,'ajax.php?mode=refresh_centrab','refresh_centrab');
						return;
					}
					alertify.error(resp);
				}
			});
	});
});
/**
* Funcion para eliminar centro_trabajo
*/
function delCenTrab(id)
{
	alertify.confirm("¿Está seguro que desea eliminar?",function(e){
		if (e) {
			$.ajax({
				beforeSend:function(){},
				url:'ajax.php?mode=del_centrab',
				type:'post',
				data:'id_ct='+id,
				success:function(resp){
					if (resp==1) {
						carga_ajax(null,'ajax.php?mode=refresh_centrab','refresh_centrab');
					}else{
					 alertify.error('No se pudo elimiar');
					}
				}
			});
		}
	});
}
