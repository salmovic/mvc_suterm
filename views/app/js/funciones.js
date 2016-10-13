/**
*Funcion que permite cargar ventanas modales con ajax
*/
function carga_ajax( id,url,div )
{
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
/**
* Configuracion de valores predetermindos de alertify
*/
function reset () {
	$("#toggleCSS").attr("href", "views/build/alertify/themes/alertify.default.css");
	alertify.set({
		labels : {
			ok     : "Aceptar",
			cancel : "Cancelar"
		},
		delay : 5000,
		buttonReverse : false,
		buttonFocus   : "ok"
	});
	alertify.alert('Hola soy un alerta');
}
reset();
