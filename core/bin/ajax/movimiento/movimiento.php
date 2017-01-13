<?php
if (!isset($_POST['token'])) {echo -1; exit;}
$token = $_POST['token'];
switch ( $token ) {
	case 'setSustituto':
	if(!validarSustituto()) return;
		$x = $movimientos->setSustituto();
		if($x!=1) {
			echo "No se pudo guardar el sustituto.";
		}
		echo $x;
		break;
		case 'setmomvimiento':
		/*Gurdar el movimiento a la base de datos como historial*/
			$folio = $_POST["folio_mov"];
			if(!validarMov()) return;

			$m = $movimientos->saveMovimiento();
			if($m!=1) {
				echo "No se pudo guardar el movimiento. Vueva a interntarlo con otro folio.";
				return;
			}
			/*Si se guardo crrectamente el movimiento se crea una variable de sesion para poder ejecutar posteriormente el reporte en PDF*/
			$_SESSION['folio_pdf']=$folio;
			$_SESSION['folio_pdf2']=$folio;
			echo $m;
		break;
		default:
		echo "Token no valido";
		break;
}
/**
* Validacion de Sustitutos
*/
function validarSustituto() {
	//validar RPE
	// verificar si existe un empleado seleccionado
	if($_POST["rpe_empleado"]==-1) {
		echo "Debe seleccionar un empleado.";
		return false;
	}
	// verificar si esta seleccionado una fecha
	$fecha_fin='/^([0-9]){2}([\\/]){1}([0-9]){2}([\\/]){1}([0-9]){4}$/';
	if(!preg_match($fecha_fin, $_POST['fecha_fin']) || empty($_POST['fecha_fin'])) {
		echo "Verifique el formato de fecha de inicio sea válido!.";
		return false;
	}
	// verificar si esta seleccionado una fecha
	$fecha_fin='/^([0-9]){2}([\\/]){1}([0-9]){2}([\\/]){1}([0-9]){4}$/';
	if(!preg_match($fecha_fin, $_POST['fecha_fin']) || empty($_POST['fecha_fin'])) {
		echo "Verifique el formato de fecha de fin sea válido!.";
		return false;
	}
	return true;
}
/*
* Validaciones de l Movimiento
*/
function validarMov() {
	// verificar si existe un empleado seleccionado
	if(!isset($_POST["folio_mov"])||empty($_POST["folio_mov"])) {
		echo "Debe buscar un empleado válido.";
		return false;
	}
	// Verificando si esta seleccionado un tipo de permiso
	if($_POST['tipo_perm']==-1) {
		echo "Debe seleccionar un tipo de Permiso";
		return false;
	}
	// verificar si esta seleccionado una fecha
	$fechainicio='/^([0-9]){2}([\\/]){1}([0-9]){2}([\\/]){1}([0-9]){4}$/';
	if(!preg_match($fechainicio, $_POST['fechainicio']) || empty($_POST['fechainicio'])) {
		echo "Verifique el formato de fecha de inicio sea válido!.";
		return false;
	}
	// verificar si esta seleccionado una fecha
	$fechafin='/^([0-9]){2}([\\/]){1}([0-9]){2}([\\/]){1}([0-9]){4}$/';
	if(!preg_match($fechafin, $_POST['fechafin']) || empty($_POST['fechafin'])) {
		echo "Verifique el formato de fecha de fin sea válido!.";
		return false;
	}
	// Secretario de trabajo Suterm
	if($_POST['sec_suterm']==-1) {
		echo "Debe seleccionar un Secretario de Trabajo.";
		return false;
	}
	// delegado
	if($_POST['delegado']==-1) {
		echo "Debe seleccionar un Delegado.";
		return false;
	}
	//validar descripcion
	$descripcion = "/^([A-Z0-9Ñ\s.,#-;:]){0,255}$/";
	if(!preg_match($descripcion, $_POST['descripcion'])) {
		echo "Algunos caracteres ingresados en la descripcion no son válidos. Longitud máxima 255 caracteres.";
		return false;
	}
	return true;
}
?>
