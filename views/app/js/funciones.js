/**
*Funcion que permite cargar ventanas modales con ajax
*/
function carga_ajax( id,url,div )
{
	console.log(id+' '+url+' '+div);
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
function resetAlertify () {
	$("#toggleCSS").attr("href", "views/build/alertify/themes/alertify.default.css");
	alertify.set({
		labels : {
			ok     : "Aceptar",
			cancel : "Cancelar"
		},
		delay : 3000,
		buttonReverse : false,
		buttonFocus   : "ok"
	});
}
/*
* Resetear un formulario
* @param id formulario
*/
function resetForm(id)
{
	document.getElementById(id).reset();
}
