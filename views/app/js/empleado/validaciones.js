//------------------------------------------------------------------------------ STEP 1
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
 		var msj = "Éste campo no debe de contener numeros ó caracteres especiales.";
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
 //Numero de seguro social
$('#no_seguro').keyup(function(e){
 var dom = $(this);
 if( dom.val().length < 11) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _noseguro(campo) {
	var exR = /^[0-9]{11}$/;
	var msj = "Ingrese los 11 numeros de No. de Seguro.";
	regExPattern(campo,exR,msj);
}
 // -- end no_seguro
//Tipo de Sangre
$('#tipo_sangre').keyup(function(e){
var dom = $(this);
minToMayuscula('tipo_sangre');
if( dom.val().length < 5) {
 dom.unbind('keypress');
if(dom.val()!="") return;
return;
}
lockTeclado(dom);
});
function _tipo_sangre(campo) {
 var exR = /^[AOB]{1}[+-]{1}|[A]{1}[B]{1}[+-]{1}$/;
 var msj = "El tipo de sangre ingresado no es válido.";
 regExPattern(campo,exR,msj);
}

 //Fechas
 onlyNumbers('.calendario');
 function _fecha(campo) {
 	 var exR = /^([0-9]){2}([/]){1}([0-9]){2}([/]){1}([0-9]){4}$/;
	 var msj = "El formato de fecha no es válido.";
	 regExPattern(campo,exR,msj);
 }
 // End Fechas

 //lugar de nacimiento
 $('#lugar_nacimiento').keyup(function(e) {
	var dom = $(this);
	minToMayuscula('lugar_nacimiento');
	if(dom.val().length < 99) {
	 dom.unbind('keypress');
	if(dom.val()!="") return;
	return;
	}
	lockTeclado(dom);
 });
 function _lug_nac(campo) {
	 var exR = /^([A-ZÑ\s.,]){3,100}$/;
	 var msj = "Ingrese caracteres validos y una logintud de entre 3 y 100.";
	 regExPattern(campo,exR,msj);
 }
//Entidad fed nacimiento
$('#entidad_federativa_nac').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('entidad_federativa_nac');
 if( dom.val().length < 149) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _entidad_federativa_nac(campo) {
	var exR = /^([A-ZÑ\s.,]){3,150}$/;
	var msj = "Ingrese caracteres validos y una logintud de entre 3 y 150.";
	regExPattern(campo,exR,msj);
}
//Nacionalidad
$('#nacionalidad').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('nacionalidad');
 if( dom.val().length < 24) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _nacionalidad(campo) {
	var exR = /^([A-ZÑ\s.,]){3,25}$/;
	var msj = "Ingrese caracteres validos y una logintud de entre 3 y 25.";
	regExPattern(campo,exR,msj);
}
//----------Datos Personales-----------------------------------
//Domicilio
$('#domicilio').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('domicilio');
 if( dom.val().length < 149) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _domicilio(campo) {
	var exR = /^([A-Z0-9Ñ\s.,#-]){3,150}$/;
	var msj = "Ingrese caracteres validos y una logintud de entre 3 y 150.";
	regExPattern(campo,exR,msj);
}
//colonia
$('#colonia').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('colonia');
 if( dom.val().length < 100) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _colonia(campo) {
	var exR = /^([A-Z0-9Ñ\s.,#-]){3,150}$/;
	var msj = "Ingrese caracteres validos y una logintud de entre 3 y 100.";
	regExPattern(campo,exR,msj);
}
//codigo Postal
$('#codigo_postal').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('codigo_postal');
 if( dom.val().length < 5) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _codigo_postal(campo) {
	var exR = /^\d{4,5}$/;
	var msj = "Ingrese los 4 ó 5 numeros del código postal.";
	regExPattern(campo,exR,msj);
}

//municipio_dom
$('#municipio_dom').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('municipio_dom');
 if( dom.val().length < 45) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _municipio_dom(campo) {
	var exR = /^([A-ZÑ\s.,]){3,45}$/;
	var msj = "Ingrese solo caracteres alfabeticos.";
	regExPattern(campo,exR,msj);
}

//entidad_federativa_dom
$('#entidad_federativa_dom').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('entidad_federativa_dom');
 if( dom.val().length < 45) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _entidad_federativa_dom(campo) {
	var exR = /^([A-ZÑ\s.,]){3,45}$/;
	var msj = "Ingrese solo caracteres alfabeticos. ";
	regExPattern(campo,exR,msj);
}
//email
$('#email').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('email');
 if( dom.val().length < 100) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _email(campo) {
	var exR = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/;
	var msj = "El correo ingresado no es válido. ";
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
	var msj = "El número de teléfono ingresado no es válido.";
	regExPattern(campo,exR,msj);
}
//celular
$('#celular').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('celular');
 if( dom.val().length < 12) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _celular(campo) {
	var exR = /^\d{10,12}$/;
	var msj = "El número de teléfono ingresado no es válido.";
	regExPattern(campo,exR,msj);
}
//Nombre conyugue
$('#nombre_conyugue').keyup(function(e) {
	var dom = $( this );
	minToMayuscula('nombre_conyugue');
	if( dom.val().length <= 100) {
		dom.unbind('keypress');
	 	if(dom.val()!="") return;
	 	return;
	}
	lockTeclado(dom);
});
function _nombre_conyugue(campo) {
		var exR = /^([A-ZÑ\s])*$/;
		var msj = "Éste campo no debe de contener caracteres especiales.";
		regExPatternConyugue(campo,exR,msj);
}
//Domicilio conyugue
$('#dom_conyugue').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('dom_conyugue');
 if( dom.val().length < 149) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _dom_conyugue(campo) {
	var exR = /^([A-Z0-9Ñ\s.,#-]){0,150}$/;
	var msj = "Ingrese caracteres validos y una logintud de entre 3 y 150.";
	regExPatternConyugue(campo,exR,msj);
}
function _fechaCon(campo) {
	var exR = /^([0-9]){2}([/]){1}([0-9]){2}([/]){1}([0-9]){4}$/;
	var msj = "El formato de fecha conyugue no es válido.";
	regExPatternConyugue(campo,exR,msj);
}
//num_depen_econ
$('#num_depen_econ').keyup(function(e) {
 var dom = $(this);
 if( dom.val().length < 2) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _num_depen_econ(campo) {
	var exR = /^[0-9\s]{0,2}$/;
	var msj = "Ingrese solo numeros";
	regExPatternConyugue(campo,exR,msj);
}
//-------------------------------- Datos ref a la empresa
//antiguedad
$('#antiguedad').keyup(function(e) {
 var dom = $(this);
 if( dom.val().length < 2) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _antiguedad(campo) {
	var exR = /^[0-9]{0,2}$/;
	var msj = "Ingrese solo números.";
	regExPattern(campo,exR,msj);
}
//Validar opcion multiple
function validarSelect( campo ) {
	if(campo.value==-1){
		campo.style.border="1px solid red";
		alertify.error('Seleccione una opcion');
		campo.focus();
		return;
	}
campo.style.border="1px solid green";
}
//-------------------------------- Datos profesionales
//escuela_egresado
$('#escuela_egresado').keyup(function(e) {
	var dom = $( this );
	minToMayuscula('escuela_egresado');
	if( dom.val().length <= 100) {
		dom.unbind('keypress');
	 	if(dom.val()!="") return;
	 	return;
	}
	lockTeclado(dom);
});
function _escuela_egresado(campo) {
		var exR = /^([A-ZÑ\s])*$/;
		var msj = "Éste campo no debe de contener caracteres especiales.";
		regExPattern(campo,exR,msj);
}
//cedula_profesional
$('#cedula_profesional').keyup(function(e) {
	var dom = $( this );
	if( dom.val().length <= 15) {
		dom.unbind('keypress');
	 	if(dom.val()!="") return;
	 	return;
	}
	lockTeclado(dom);
});
function _cedula_profesional(campo) {
		var exR = /^([0-9\s]){0,15}$/;
		var msj = "Ingrese solo numeros de maximo 15 caracteres.";
		regExPatternConyugue(campo,exR,msj);
}
//idioma
$('#idioma').keyup(function(e) {
	var dom = $( this );
	minToMayuscula('idioma');
	if( dom.val().length <= 50) {
		dom.unbind('keypress');
	 	if(dom.val()!="") return;
	 	return;
	}
	lockTeclado(dom);
});
function _idioma(campo) {
		var exR = /^([A-ZÑ\s,])*$/;
		var msj = "Ingrese solo letras y (,).";
		regExPatternConyugue(campo,exR,msj);
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
//
function regExPatternConyugue(campo,rex,mensaje) {
	if ( (campo.value.match(rex))) {
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
