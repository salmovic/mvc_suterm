$(document).ready(function() {
	/*
	 * Inicializar Funcy Box
	 */
	$(".fancybox").fancybox({
		maxWidth	: 800,
		maxHeight	: 600,
		fitToView	: true,
		width		: '70%',
		height		: '70%',
		autoSize	: true,
		openEffect	: 'elastic',
		closeEffect	: 'elastic'
	});
});
/**
*Funcion que permite cargar ventanas modales con ajax
*/
function carga_ajax( id,url,div )
{
	// $.ajax({
	// 		//ruta archivo php
	// 		url: url,
	// 		//typo o metodo de envio
	// 		type: 'post',
	// 		//envio de datos
	// 		data: "id="+id,
	// 		//suscectible
	// 		success: function(respuesta) {
	// 			console.log(respuesta);
	// 		},
	// 		//ejecuta al completar exitosamente la peticion
	// 		complete: function(jqXHR,estado) {
	// 				$("#"+div+"").html(resp);
	// 		},
	// 		timeout: 10000
	// });

			$.post
			(
				url,
				{id:id},
				function(resp)
				{
					$('#'+div+'').html(resp);
				}
			);

}
