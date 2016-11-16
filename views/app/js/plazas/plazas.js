$(document).ready(function(){
	/*Establecer valores alertify español*/
	resetAlertify();
/*
* Enviar formualario Plazas
*/
	$('#enviar_plaza').on('click',function(e)
	{
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
					console.log(respuesta);
					if(respuesta==1){
						alertify.success("Se cargó correctamente");
						resetForm('frmplaza');
						carga_ajax(null,'ajax.php?mode=refresh_plaza','tb_plaza');
					}else{
						alertify.error("No se pudo cargar guardar la categoria");
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
/*
* Funcion que permite eliminar una categoria
*/
function eliminarPlaza(id)
{
	alertify.confirm("Esta seguro que desea eliminar", function (e)
	{
    if (e) {
			$.ajax({
			    //ruta archivo php
			    url: 'ajax.php?mode=delete_plaza',
			    type: 'post',
			    data:'idplaza='+id,
			    success: function(respuesta) {
						console.log(respuesta);
						if(respuesta==1){
							alertify.success("Se elimino correctamente");
							carga_ajax(null,'ajax.php?mode=refresh_plaza','tb_plaza');
						}else{
							alertify.error("No se pudo eliminar");
						}
			    },
			    //ejecuta cuando hay un error en la peticion
			    error: function(jqXHR,estado,error) {
			        alertify.error('Ocurrio un error '+error);
			    },
			    //ejecuta al completar exitosamente la peticion
			    complete: function(jqXHR,estado) {},
			    timeout: 10000
			});
    } else {
        alertify.error("No quiso elimiar "+id);
    }
	});
}
