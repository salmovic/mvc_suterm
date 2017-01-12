<?php
if( isset( $_POST['token'] ) )
{
	switch ($_POST['token']) {
		case 'setplaza':
		// Validar campos
		if(!validacion())return;

		$exito = $plazas->setPlazas();
		if($exito != 1 ) {
			echo "No se pudo guardar el registro.";
			return;
		}
		echo $exito;
		break;

		case 'updateplaza':
			echo $plazas->updatePlazas();
		break;
		default:
			echo "Ruta no especificada.";
		break;
	}
}
//Validar campos
function validacion() {
	//validar no_plaza
	$no_plaza = "/^([0-9A-Z]){3,15}$/";
	if(!preg_match($no_plaza, $_POST['no_plaza']) || empty($_POST['no_plaza'])) {
		echo "Verifique que el número de plaza sea válido!. Máximo 15 caracteres.";
		return false;
	}
	//validar nombre_cat
	$nombre_cat = "/^([A-Z\s]){3,45}$/";
	if(!preg_match($nombre_cat, $_POST['nombre_cat']) || empty($_POST['nombre_cat'])) {
		echo "Verifique que el nombre sea válido!. Máximo 45 caracteres.";
		return false;
	}
	//validar grupo_organico
	if($_POST['grupo_organico']==-1){
		echo "Debe seleccionar un grupo organico.";
		return false;
	}
	//validar nivel_desempenio
	if($_POST['nivel_desempenio']==-1){
		echo "Debe seleccionar un nivel de desempeño.";
		return false;
	}
	//validar grupo_nivel
	$grupo_nivel = "/^\d{0,4}$/";
	if(!preg_match($grupo_nivel, $_POST['grupo_nivel']) || empty($_POST['grupo_nivel'])) {
		echo "Verifique que el grupo nivel.";
		return false;
	}
	//validar plan_carrera
	$plan_carrera = "/^\d{0,2}$/";
	if(!preg_match($plan_carrera, $_POST['plan_carrera']) || empty($_POST['plan_carrera'])) {
		echo "Verifique que el Plan de carrera.";
		return false;
	}
	//validar grupo
	$grupo = "/^([A-Z\d]){0,2}$/";
	if(!preg_match($grupo, $_POST['grupo']) || empty($_POST['grupo'])) {
		echo "Verifique que el grupo.";
		return false;
	}
	//validar unidad
	$unidad = "/^([A-Z\d]){0,2}$/";
	if(!preg_match($unidad, $_POST['unidad']) || empty($_POST['unidad'])) {
		echo "Verifique que la unidad.";
		return false;
	}
	return true;
}
?>
