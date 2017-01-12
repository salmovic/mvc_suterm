//Validar opcion multiple
function validarSelect( campo ) {
	if(campo.value==-1){
		campo.style.border="1px solid red";
		alertify.error('Debe seleccionar una opción.');
		campo.focus();
		return;
	}
	campo.style.border="1px solid green";
}
//descripcion
$('#descripcion').keyup(function(e) {
	var dom = $( this );
	minToMayuscula('descripcion');
	if( dom.val().length < 100) {
		dom.unbind('keypress');
	 	if(dom.val()!="") return;
	 	return;
	}
	lockTeclado(dom);
});
function _descripcion(campo) {
		var exR = /^([A-Z0-9Ñ\s.,#-]){3,100}$/;
		var msj = "Algunos caracteres ingresados no son validos. Longitud máxima 100 caracteres.";
		regExPattern(campo,exR,msj);
}
//-----
/**
*Bloquear teclado
* @param target objeto Dom
*/
function lockTeclado(target) {
			$(target).keypress(function( e ) {
				if(e.charCode != 220) {
					 return false;
				}
		});
}

/**
* Funcion para evaluar una expresion regular
*@param campo input
*@param rex expresion regular
*@param mensaje string mensaje al usuario
*/
function regExPattern(campo,rex,mensaje) {
	if ( (campo.value.match(rex)) && (campo.value!='') ) {
			campo.style.border="1px solid green";
			return;
	}
	campo.style.border="1px solid red";
	campo.focus();
	alertify.error(mensaje);
}
