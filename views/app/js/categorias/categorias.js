$(document).ready(function(){
	/*Establecer valores alertify español*/
	resetAlertify();
//Enviar formulario
	$('#enviar').on('click',function(e)	{
		//deshabilitar el envio por default
		e.preventDefault();
		$.ajax({
		    //antes de que se envie la peticion
		    beforeSend: function() {
		        // $("#status").html('<span class="glyphicon glyphicon-hourglass label-success"></span>');
		    },
		    //ruta archivo php
		    url: 'ajax.php?mode=categoria',
		    //typo o metodo de envio
		    type: 'post',
		    //envio de datos
		    data:$("#frmcat").serialize(),
		    //suscectible
		    success: function(respuesta) {
					if(respuesta==1){
						alertify.success("Se cargó correctamente");
						carga_ajax(null,'ajax.php?mode=refresh_cat','tb_categoria');
					}else{
						alertify.error("No se pudo cargar guardar la categoria");
					}
		    },
		    //ejecuta cuando hay un error en la peticion
		    error: function(jqXHR,estado,error) {
		        // $("#status").html('<span class="glyphicon glyphicon-remove-circle label-warning"></span>');
		        alertify.error("Ocurrio un erro inesperado "+error);
		    },
		    //ejecuta al completar exitosamente la peticion
		    complete: function(jqXHR,estado) {

		    },
		    timeout: 10000
		});

	});

});
/*
* Funcion que permite eliminar una categoria
*/
function elimiarCat(id){
	alertify.confirm("Esta seguro que desea eliminar", function (e) {
    if (e) {
			$.ajax({
			    //ruta archivo php
			    url: 'ajax.php?mode=delete_cat',
			    type: 'post',
			    data:'id_categorias='+id,
			    success: function(respuesta) {
						if(respuesta==1){
							alertify.error("Se elimino correctamente");
							carga_ajax(null,'ajax.php?mode=refresh_cat','tb_categoria');
						}else{
							alertify.error("No se pudo eliminar");
						}
			    },
			    //ejecuta cuando hay un error en la peticion
			    error: function(jqXHR,estado,error) {
			        // $("#status").html('<span class="glyphicon glyphicon-remove-circle label-warning"></span>');
			        alertify.error('Ocurrio un error '+error);
			    },
			    //ejecuta al completar exitosamente la peticion
			    complete: function(jqXHR,estado) {
			        console.log("complete "+estado);
			    },
			    timeout: 10000
			});
    } else {
        alertify.error("No quiso elimiar "+id);
    }
});
}
