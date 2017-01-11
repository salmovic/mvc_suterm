//nombre
$('#nombre').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('nombre');
 if( dom.val().length < 50) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _nombre(campo) {
	var exR = /^([A-ZÑ\s]){3,50}$/;
	var msj = "Éste campo no debe de contener caracteres especiales. Longiud máxima 50 caracteres.";
	regExPattern(campo,exR,msj);
}
//extencion
$('#extencion').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('extencion');
 if( dom.val().length < 10) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _extencion(campo) {
	var exR = /^\d{0,10}$/;
	var msj = "Debe tener máximo 10 caracteres numéricos.";
	regExPattern(campo,exR,msj);
}
//telefono
$('#telefono').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('telefono');
 if( dom.val().length < 12) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _telefono(campo) {
	var exR = /^\d{10,12}$/;
	var msj = "El número de teléfono debe tener 10 ó 12 dígitos.";
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
// Solo numeros
function onlyNumbers(target){
	$(target).keypress(function( e ) {
		if(e.charCode < 48 || e.charCode > 57) return false;
	});
}
