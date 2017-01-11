<?php
if (isset($_POST['token']))
{
	switch ($_POST['token']) {
		case 'set_centrab':
			//Validar los campos
			if(!validaciones()) return;
			//Ejecutar instruccion
			$exito = $centroTrabajo->setCentroTrabajo();
			if($exito!=1) {
				echo "No se pudo guardar el registro.";
			}
			echo $exito;
			break;
		case 'up_centrab':
		//Validacion de los campos
		if(!validaciones()) return;
		//Ejecutar instruccion
		  $exito = $centroTrabajo->updateCentroTrabajo();
			if($exito!=1) {
				echo "No se pudo acutalizar el registro.";
			}
			echo $exito;
		break;
		default:
			echo "Error de acceso";
			break;
	}
}else {
		echo "No error de acceso";
}
//Validaciones con Expresion regular
function validaciones() {
	//validar nombre
	$nombre = "/^([A-ZÑ\s])*$/";
	if(!preg_match($nombre, $_POST['nombre']) || empty($_POST['nombre'])) {
		echo "Verifique que el nombre sea válido!.";
		return false;
	}
	//validar domicilio
	$domicilio = "/^([A-Z0-9Ñ\s.,#-]){3,100}$/";
	if(!preg_match($domicilio, $_POST['domicilio']) || empty($_POST['domicilio'])) {
		echo "Verifique que el domicilio sea válido!.";
		return false;
	}
	//validar codigo_postal
	$codigo_postal = "/^\d{4,5}$/";
	if(!preg_match($codigo_postal, $_POST['codigo_postal']) || empty($_POST['codigo_postal'])) {
		echo "Verifique que el código postal sea válido!.";
		return false;
	}
	//validar municipio
	$municipio = "/^([A-ZÑ\s.,]){3,60}$/";
	if(!preg_match($municipio, $_POST['municipio']) || empty($_POST['municipio'])) {
		echo "Verifique que el municipio sea válido!.";
		return false;
	}
	//validar entidad_fed
	$entidad_fed = "/^([A-ZÑ\s.,]){3,45}$/";
	if(!preg_match($entidad_fed, $_POST['entidad_fed']) || empty($_POST['entidad_fed'])) {
		echo "Verifique que el entidad federativa sea válido!.";
		return false;
	}
	//validar telefono
	$telefono = "/^\d{10,12}$/";
	if(!preg_match($telefono, $_POST['telefono']) || empty($_POST['telefono'])) {
		echo "Verifique que el número de teléfono sea válido!.";
		return false;
	}
	return true;
}
?>
