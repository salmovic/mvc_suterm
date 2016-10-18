$(document).ready(function()
{
	resetAlertify();
	$('#setDepartamentos').on('click',function(e){
		e.preventDefault();
		$.ajax({
				beforeSend: function() {},
				//ruta archivo php
				url: 'ajax.php?mode=departamento',
				//typo o metodo de envio
				type: 'post',
				//envio de datos
				data:$("#frmDepartamento").serialize(),
				//suscectible
				success: function(respuesta) {
					if(respuesta==1){
						alertify.success("Se cargó correctamente");
						carga_ajax(null,'ajax.php?mode=refresh_depto','tb_depto');
					}else{
						alertify.error("No se pudo cargar "+respuesta);
					}
				},
				//ejecuta cuando hay un error en la peticion
				error: function(jqXHR,estado,error) {
						alertify.error("Ocurrio un erro inesperado "+error);
				},
				//ejecuta al completar exitosamente la peticion
				complete: function(jqXHR,estado){},
				timeout: 10000
		});
	});
});
function eliminarDepto( id )
{
	
	alertify.confirm("Está seguro de desea eliminar id="+id,function(e){
		if( e )
		{
			$.ajax({
					beforeSend: function() {},
					//ruta archivo php
					url: 'ajax.php?mode=deldepto',
					//typo o metodo de envio
					type: 'post',
					//envio de datos
					data:"id="+id,
					//suscectible
					success: function(respuesta) {
						console.log(respuesta);
						if(respuesta==1){
							alertify.success("Se cargó correctamente");
						 carga_ajax(null,'ajax.php?mode=refresh_depto','tb_depto');
						}else{
							alertify.error("No se pudo cargar "+respuesta);
						}
					},
					//ejecuta cuando hay un error en la peticion
					error: function(jqXHR,estado,error) {
							alertify.error("Ocurrio un erro inesperado "+error);
					},
					//ejecuta al completar exitosamente la peticion
					complete: function(jqXHR,estado){},
					timeout: 10000
			});
		}else
		{
			alertify.error("No eslimino");
		}
	});
}
