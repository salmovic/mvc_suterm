<?php
if (isset($_POST['token']))
{
	switch ($_POST['token']) {
		case 'set_departamento':
			// Validaciones
			if(!validaciones()) return;

				$exito = $departamento->setDepartamentos();
				if($exito!=1) {
					echo "No se pudo guardar el registro.";
					return;
				}
				echo $exito;
			break;
		case 'up_departamento':
		// Validaciones
		if(!validaciones()) return;
			$exito = $departamento->updateDepartamentos();
			if($exito!=1) {
				echo "No se pudo actualizar el registro.";
				return;
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
function validaciones() {
	//validar nombre
	$nombre = "/^([A-ZÑ\s])*$/";
	if(!preg_match($nombre, $_POST['nombre']) || empty($_POST['nombre'])) {
		echo "Verifique que el nombre sea válido!.";
		return false;
	}
	//validar extencion
	$extencion = "/^\d{0,10}$/";
	if(!preg_match($extencion, $_POST['extencion']) || empty($_POST['extencion'])) {
		echo "Verifique que la extencion sea válido!.";
		return false;
	}
	//validar telefono
	$telefono = "/^\d{10,12}$/";
	if(!preg_match($telefono, $_POST['telefono']) || empty($_POST['telefono'])) {
		echo "Verifique que el telefono sea válido!.";
		return false;
	}
	return true;
}
?>
