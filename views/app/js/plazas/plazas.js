$(document).ready(function(){
	/*Establecer valores alertify español*/
	resetAlertify();
/*
* Enviar formualario Plazas
*/
	$('#enviar_plaza').on('click',function(e)	{
		e.preventDefault();
		$.ajax({
		    //ruta archivo php
		    url: 'ajax.php?mode=plaza',
		    //typo o metodo de envio
		    type: 'post',
		    //envio de datos
		    data:$("#frmplaza").serialize(),
		    //suscectible
		    success: function(respuesta) {
					if(respuesta==1){
						alertify.success("El registro se completó exitosamente.");
						resetForm('frmplaza');												
						carga_ajax(null,'ajax.php?mode=refresh_plaza','tb_plaza');
						return;
					}
					alertify.error(respuesta);
		    }
		});
	});
});
/*
* Funcion que permite eliminar una categoria
*/
function eliminarPlaza(id)
{
	alertify.confirm("¿Está seguro que desea eliminar?", function (e)
	{
    if (e) {
			$.ajax({
			    //ruta archivo php
			    url: 'ajax.php?mode=delete_plaza',
			    type: 'post',
			    data:'idplaza='+id,
			    success: function(respuesta) {
						if(respuesta==1){
							alertify.success("Se elimino correctamente");
							carga_ajax(null,'ajax.php?mode=refresh_plaza','tb_plaza');
						}else{
							alertify.error("No se pudo eliminar");
						}
			    }
			});
    }
	});
}
