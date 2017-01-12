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
