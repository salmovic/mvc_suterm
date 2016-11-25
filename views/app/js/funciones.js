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
resetAlertify();

/**
* Convertir caracteres a mayuscula
*/
function minToMayuscula( e ){
    var e = $('#'+e+'');
    e.val(e.val().toUpperCase());
}
// Cerrar Session
function cerrarSession() {
	alertify.confirm("Esta seguro que desea salir",function( e ){
			if ( !e ) return;
			$.ajax({
				url:'ajax.php?mode=salir',
				type:'post',
				data:"token=out",
				success:function( resp ) {
					$(location).attr('href','index.php');
				}
			});
	});
}
