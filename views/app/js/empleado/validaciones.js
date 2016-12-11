// Validar RPE
$('#rpe').keyup(function(e){
	var dom = $(this);
	minToMayuscula('rpe');
	if( dom.val().length <= 5){
		dom.unbind('keypress');
	 if(dom.val()!="") return;
	 return;
	}
	lockTeclado(dom);
});
function _rpe(campo) {
    // var exR = /(?!^[0-9]*$)(?!^[A-Z]*$)^([A-Z0-9]{0,6})$/;
		var exR = /^([0-9A-Z])*$/;
		var msj = "Debe ingresar un RPE válido!";
		regExPattern(campo,exR,msj);
}
//---end RPE

//Nombre
$('#nombre').keyup(function(e) {
	var dom = $( this );
	minToMayuscula('nombre');
	if( dom.val().length <= 100) {
		dom.unbind('keypress');
	 	if(dom.val()!="") return;
	 	return;
	}
	lockTeclado(dom);
});
function _nombre(campo) {
		var exR = /^([A-ZÑ\s])*$/;
		var msj = "Éste campo no debe de contener caracteres especiales.";
		regExPattern(campo,exR,msj);
}
 // --- end Nombre

 //Apellidos
 $('#apellidos').keyup(function(e) {
 	var dom = $(this);
 	minToMayuscula('apellidos');
 	if( dom.val().length <= 100 ) {
 		dom.unbind('keypress');
 	 if(dom.val()!="") return;
 	 return;
 	}
 	lockTeclado(dom);
 });
 function _apellidos(campo) {
 		var exR = /^([A-ZÑ\s])*$/;
 		var msj = "Éste campo no debe de contener caracteres especiales.";
 		regExPattern(campo,exR,msj);
 }
 // End Apellidos
 //rfc
 $('#rfc').keyup(function(e) {
 	var dom = $(this);
 	minToMayuscula('rfc');
 	if( dom.val().length <= 15){
 		dom.unbind('keypress');
 	 if(dom.val()!="") return;
 	 return;
 	}
 	lockTeclado(dom);
 });
 function _rfc(campo) {
 		var exR = /^([A-Z,Ñ,&]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z|\d]{3})$/;
 		var msj = "El formato RFC no es valido.";
 		regExPattern(campo,exR,msj);
 }
 // End rfc
 //Curp
 $('#curp').keyup(function(e){
  var dom = $(this);
  minToMayuscula('curp');
  if( dom.val().length < 20) {
 	 dom.unbind('keypress');
 	if(dom.val()!="") return;
 	return;
  }
  lockTeclado(dom);
 });
 function _curp(campo) {
 	 var exR = /^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$/;
 	 var msj = "El formato CURP no es valido.";
 	 regExPattern(campo,exR,msj);
 }
 // End Curp
 // ------ pendiente
 // -- pen
 //Curp
 $('#curp').keyup(function(e) {
  var dom = $(this);
  minToMayuscula('curp');
  if( dom.val().length < 20){
 	dom.unbind('keypress');
  if(dom.val()!="") return;
  return;
  }
  lockTeclado(dom);
 });
 function _curp(campo) {
 	var exR = /^([A-ZÑ\s])*$/;
 	var msj = "El formato CURP no es valido.";
 	regExPattern(campo,exR,msj);
 }
 // End Curp

 //Fechas
 lockTeclado('.calendario');
 function _fecha(campo) {
 	 if(campo.value!='') {
		 campo.style.border="1px solid green";
		 return;
	 }
	 campo.style.border="1px solid red";
	 campo.focus();
 	alertify.error("Debe seleccionar una fecha");
 }
 // End Fechas

 //lugar de nacimiento
 $('#lugar_nacimiento').keyup(function(e) {
	var dom = $(this);
	minToMayuscula('lugar_nacimiento');
	if( dom.val().length < 100) {
	 dom.unbind('keypress');
	if(dom.val()!="") return;
	return;
	}
	lockTeclado(dom);
 });
 function _lug_nac(campo) {
	 var exR = /^([A-ZÑ\s])*$/;
	 var msj = "El formato CURP no es valido.";
	 regExPattern(campo,exR,msj);
 }
//------------------------------------------------------------------------------
/**
* @param target objeto Dom
*/
function lockTeclado(target) {
			$(target).keypress(function( e ) {
				if(e.charCode != 220) {
					 e.preventDefault();
				}
		});
}

/**
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
