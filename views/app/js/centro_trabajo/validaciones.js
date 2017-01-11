//Nombre
$('#nombre').keyup(function(e) {
	var dom = $( this );
	minToMayuscula('nombre');
	if( dom.val().length <= 200) {
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
//Domicilio
$('#domicilio').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('domicilio');
 if( dom.val().length < 100) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _domicilio(campo) {
	var exR = /^([A-Z0-9Ñ\s.,#-]){3,100}$/;
	var msj = "Ingrese caracteres validos y una logintud de entre 3 y 150.";
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
//municipio
$('#municipio').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('municipio');
 if( dom.val().length < 60) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _municipio(campo) {
	var exR = /^([A-ZÑ\s.,]){3,60}$/;
	var msj = "Ingrese solo caracteres alfabeticos.";
	regExPattern(campo,exR,msj);
}
//entidad_fed
$('#entidad_fed').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('entidad_fed');
 if( dom.val().length < 45) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _entidad_fed(campo) {
	var exR = /^([A-ZÑ\s.,]){3,45}$/;
	var msj = "Ingrese solo caracteres alfabeticos. ";
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
//minToMayuscula
function minToMayuscula( e ) {
	console.log(e);
		var e = $('#'+e+'');
		e.val(e.val().toUpperCase());
}
