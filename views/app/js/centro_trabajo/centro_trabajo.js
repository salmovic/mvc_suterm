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
						alertify.success('La informacion se ha guardado correctamente');
						resetForm('frmCenTrabajo');
						carga_ajax(null,'ajax.php?mode=refresh_centrab','refresh_centrab');
					}
				},
				error: function(jqXHR,estado,error){
					console.log(error);
				},
				complete: function(jqXHR,estado){
					console.log(estado);
				},
				timeout: 10000
			});
	});
});
/**
* Funcion para eliminar centro_trabajo
*/
function delCenTrab(id)
{
	alertify.confirm("Estas seguro que deseas eliminar?",function(e){
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
				},
				error:function(jqXHR,estado,error){
					alertify.error('Ocurrio un error '+error);
				},
				complete:function(jqXHR,estado){
					console.log(estado);
				},
				timeout:10000
			});
		}
	});
}
