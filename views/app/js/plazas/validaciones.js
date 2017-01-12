//no_plaza
$('#no_plaza').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('no_plaza');
 if( dom.val().length < 15) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _no_plaza(campo) {
	var exR = /^([0-9A-Z]){3,15}$/;
	var msj = "Debe tener máximo 15 caracteres letras y números.";
	regExPattern(campo,exR,msj);
}
//nombre_cat
$('#nombre_cat').keyup(function(e) {
 var dom = $(this);
 minToMayuscula('nombre_cat');
 if( dom.val().length < 45) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _nombre_cat(campo) {
	var exR = /^([A-Z\s]){3,45}$/;
	var msj = "Los caracteres ingresados no son válidos.";
	regExPattern(campo,exR,msj);
}

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
//nivel_remuneracion
$('#nivel_remuneracion').keyup(function(e) {
 var dom = $(this);
 if( dom.val().length < 5) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _nivel_remuneracion(campo) {
	var exR = /^\d{0,5}$/;
	var msj = "Ingrese solo numeros.";
	regExPattern(campo,exR,msj);
}
//grupo_nivel
$('#grupo_nivel').keyup(function(e) {
 var dom = $(this);
 if( dom.val().length < 4) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _grupo_nivel(campo) {
	var exR = /^\d{0,4}$/;
	var msj = "Ingrese solo numeros.";
	regExPattern(campo,exR,msj);
}
//plan_carrera
$('#plan_carrera').keyup(function(e) {
 var dom = $(this);
 if( dom.val().length < 2) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _plan_carrera(campo) {
	var exR = /^\d{0,2}$/;
	var msj = "Ingrese solo numeros.";
	regExPattern(campo,exR,msj);
}
//grupo
$('#grupo').keyup(function(e) {
 var dom = $(this);
 if( dom.val().length < 2) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _grupo(campo) {
	var exR = /^([A-Z\d]){0,2}$/;
	var msj = "Solo son validos letras y numeros.";
	regExPattern(campo,exR,msj);
}
//unidad
$('#unidad').keyup(function(e) {
 var dom = $(this);
 if( dom.val().length < 2) {
	dom.unbind('keypress');
 if(dom.val()!="") return;
 return;
 }
 lockTeclado(dom);
});
function _unidad(campo) {
	var exR = /^([A-Z\d]){0,2}$/;
	var msj = "Solo son validos letras y numeros.";
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
