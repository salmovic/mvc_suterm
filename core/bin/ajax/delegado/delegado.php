<?php
if ( isset($_POST['token']) ) {
	$opcion = $_POST['token'];
	switch ($opcion) {
		case 'setdeleg':
		if(!validacion()) return;
		 $m = $delegado->setDelegado();
		 if($m!=1){
			 echo "Empleado ya ha sido agregado como delegado.";
			 return;
		 }
		 echo $m;
			break;
		case 'updatedeleg':
		if(!validacion()) return;
		  echo $delegado -> updateDelegado();
		break;
		default:
		echo 'ruta no especificada.';
			break;
	}
}
function validacion() {
	if($_POST['rpe_delegado']==-1) {
		echo "Seleccione un empleado";
		return false;
	}
	//validar descripcion
	$descripcion = "/^([A-Z0-9Ñ\s.,#-;:]){3,255}$/";
	if(!preg_match($descripcion, $_POST['descripcion']) || empty($_POST['descripcion'])) {
		echo "Algunos caracteres ingresados en la descripcion no son válidos. Longitud máxima 100 caracteres.";
		return false;
	}
	return true;
}
 ?>
