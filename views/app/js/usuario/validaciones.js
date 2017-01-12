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

//usr
$('#usr').keyup(function(e) {
 var dom = $(this);
 if( dom.val().length < 25) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _usr(campo) {
	var exR = /^([a-zA-Z\d]){2,25}$/;
	var msj = "Solo son validos letras y números.";
	regExPattern(campo,exR,msj);
}
//passwd
$('#passwd').keyup(function(e) {
 var dom = $(this);
 if( dom.val().length < 25) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _passwd(campo) {
	var exR = /^([a-zA-Z\d]){4,25}$/;
	var msj = "Solo son validos letras y numeros. Debe contener como mínimo 4 caracteres.";
	regExPattern(campo,exR,msj);
}
//----- END

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
