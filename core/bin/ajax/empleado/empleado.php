<?php
if (isset($_POST['token']))
{
 switch ($_POST['token']) {
		case 'setempleado':
			if(!validarCampos())return;
			//guardar a la base de datos
 			$exit = $empleado->setEmpleado();
			if($exit==1){
				echo $exit;
				exit;
			}
			echo "El RPE puede que ya este siendo utilizado";
 		break;
	case 'upempleado':
		if(!validarCampos())return;
		$exit = $empleado->updateEmpleado();
		if($exit==1){
			echo 2;
			exit;
		}
		break;
 	default:
 		echo 'error de ruta';
 		break;
 }
}
function validarCampos() {
	/*Datos generales*/
	//validar RPE
	$rpe = "/^([0-9A-Z])*$/";
	if(!preg_match($rpe, $_POST['rpe']) || empty($_POST['rpe'])) {
		echo "Verifique que el RPE sea válido!.";
		return false;
	}
	//validar nombre
	$nombre = "/^([A-ZÑ\s])*$/";
	if(!preg_match($nombre, $_POST['nombre']) || empty($_POST['nombre'])) {
		echo "Verifique que el nombre sea válido!.";
		return false;
	}
	//validar apellidos
	$apellidos = "/^([A-ZÑ\s])*$/";
	if(!preg_match($apellidos, $_POST['apellidos']) || empty($_POST['apellidos'])) {
		echo "Verifique que los apellidos sean validos!.";
		return false;
	}
	//validar rfc
	$rfc = "/^([A-Z,Ñ,&]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z|\d]{3})$/";
	if(!preg_match($rfc, $_POST['rfc']) || empty($_POST['rfc'])) {
		echo "Verifique que el rfc sea válido!.";
		return false;
	}
	//validar curp
	$curp="/^[A-Z]{1}[AEIOU]{1}[A-Z]{2}[0-9]{2}(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[HM]{1}(AS|BC|BS|CC|CS|CH|CL|CM|DF|DG|GT|GR|HG|JC|MC|MN|MS|NT|NL|OC|PL|QT|QR|SP|SL|SR|TC|TS|TL|VZ|YN|ZS|NE)[B-DF-HJ-NP-TV-Z]{3}[0-9A-Z]{1}[0-9]{1}$/";
	if(!preg_match($curp, $_POST['curp']) || empty($_POST['curp'])) {
		echo "Verifique que la curp sea válido!.";
		return false;
	}
	//validar no_seguro
	$no_seguro="/^[0-9]{11}$/";
	if(!preg_match($no_seguro, $_POST['no_seguro']) || empty($_POST['no_seguro'])) {
		echo "Verifique que el numero de seguro sea válido!.";
		return false;
	}
	//validar tipo_sangre
	$tipo_sangre="/^[AOB]{1}[+-]{1}|[A]{1}[B]{1}[+-]{1}$/";
	if(!preg_match($tipo_sangre, $_POST['tipo_sangre']) || empty($_POST['tipo_sangre'])) {
		echo "Verifique que el tipo de sangre sea válido!.";
		return false;
	}
	//validar fecha_nacimiento
	if(empty($_POST['fecha_nacimiento'])) {
		echo "Verifique que la fecha tenga el formato correcto!.";
		return false;
	}
	//validar lugar_nacimiento
	$lugar_nacimiento="/^([A-ZÑ\s.,]){3,100}$/";
	if(!preg_match($lugar_nacimiento, $_POST['lugar_nacimiento']) || empty($_POST['lugar_nacimiento'])) {
		echo "Verifique que el lugar de nacimiento ingresado sea válido!.";
		return false;
	}
	//validar lugar_nacimiento
	$entidad_federativa_nac="/^([A-ZÑ\s.,]){3,150}$/";
	if(!preg_match($entidad_federativa_nac, $_POST['entidad_federativa_nac']) || empty($_POST['entidad_federativa_nac'])) {
		echo "Verifique que la entidad federativa nac ingresado sea válido!.";
		return false;
	}
	//validar nacionalidad
	$nacionalidad="/^([A-ZÑ\s.,]){3,150}$/";
	if(!preg_match($nacionalidad, $_POST['nacionalidad']) || empty($_POST['nacionalidad'])) {
		echo "Verifique que la nacionalidad ingresada sea válido!.";
		return false;
	}

	/*
	*Datos Personales
	*/

	//validar domicilio
	$domicilio="/^([A-Z0-9Ñ\s.,#-]){3,150}$/";
	if(!preg_match($domicilio, $_POST['domicilio']) || empty($_POST['domicilio'])) {
		echo "Verifique que domicilio ingresado sea válido!.";
		return false;
	}
	//validar colonia
	$colonia="/^([A-Z0-9Ñ\s.,#-]){3,150}$/";
	if(!preg_match($colonia, $_POST['colonia']) || empty($_POST['colonia'])) {
		echo "Verifique que la colonia ingresado sea válido!.";
		return false;
	}
	//validar codigo_postal
	$codigo_postal="/^\d{4,5}$/";
	if(!preg_match($codigo_postal, $_POST['codigo_postal']) || empty($_POST['codigo_postal'])) {
		echo "Verifique que el código postal ingresado sea válido!.";
		return false;
	}
	//validar municipio_dom
	$municipio_dom="/^([A-ZÑ\s.,]){3,45}$/";
	if(!preg_match($municipio_dom, $_POST['municipio_dom']) || empty($_POST['municipio_dom'])) {
		echo "Verifique que municipio ingresado sea válido!.";
		return false;
	}
	//validar entidad_federativa_dom
	$entidad_federativa_dom="/^([A-ZÑ\s.,]){3,45}$/";
	if(!preg_match($entidad_federativa_dom, $_POST['entidad_federativa_dom']) || empty($_POST['entidad_federativa_dom'])) {
		echo "Verifique que la entidad federativa ingresado sea válido!.";
		return false;
	}
	//validar email
	$email="/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/";
	if(!preg_match($email, $_POST['email']) || empty($_POST['email'])) {
		echo "Verifique que E-Mail ingresado sea válido!.";
		return false;
	}
	//validar telefono
	$telefono="/^\d{10,12}$/";
	if(!preg_match($telefono, $_POST['telefono']) || empty($_POST['telefono'])) {
		echo "Verifique que numero de telefono ingresado ingresado sea válido!.";
		return false;
	}
	//validar celular
	$celular="/^\d{10,12}$/";
	if(!preg_match($celular, $_POST['celular']) || empty($_POST['celular'])) {
		echo "Verifique que numero de celular ingresado ingresado sea válido!.";
		return false;
	}
	//validar estado_civil
	if(validateSelect($_POST['estado_civil'])){
		echo "Verifique que este seleccionado el estado civil!.";
		return false;
	}

	/**
	* DATOS REFERENTES A LA EMPRESA
	*/

	//validar tipo_contrato
	if(validateSelect($_POST['tipo_contrato'])){
		echo "Verifique que este seleccionado el Tipo de Contrato!.";
		return false;
	}
	// //validar fecha_ingreso_empresa
	if(empty($_POST['fecha_ingreso_empresa'])) {
		echo "Verifique que el campo fecha ingreso a la empresa no esté vacía!.";
		return false;
	}
	// //validar fecha_ingreso_suterm
	if(empty($_POST['fecha_ingreso_suterm'])) {
		echo "Verifique que el campo fecha ingreso a SUTERM no esté vacía!.";
		return false;
	}
	// //validar fecha_ing_sector_electrico
	if(empty($_POST['fecha_ing_sector_electrico'])) {
		echo "Verifique que el campo fecha ingreso al sector eléctrico no esté vacía!.";
		return false;
	}
	//validar antiguedad
	if(($_POST['antiguedad']>99)) {
		echo "Verifique que la antiguedad ingresado sea válida!.";
		return false;
	}
	//validar id_centro_trabajo
	if(validateSelect($_POST['id_centro_trabajo'])){
		echo "Verifique que este seleccionado el Centro de Trabajo!.";
		return false;
	}
	//validar id_departamento
	if(validateSelect($_POST['id_departamento'])){
		echo "Verifique que este seleccionado un departamento!.";
		return false;
	}

	//validar id_departamento

	if(validateSelect($_POST['nivel_escolaridad'])){
		echo "Verifique que este seleccionado un nivel de escolaridad!.";
		return false;
	}
	//validar escuela_egresado
	$escuela_egresado="/^([A-ZÑ\s])*$/";
	if(!preg_match($escuela_egresado, $_POST['escuela_egresado']) || empty($_POST['escuela_egresado'])) {
		echo "Verifique que la escuela egresado no este vacio!.";
		return false;
	}
	//validar cedula_profesional
	$cedula_profesional="/^([0-9\s]){0,15}$/";
	if(!preg_match($cedula_profesional, $_POST['cedula_profesional']) || empty($_POST['cedula_profesional'])) {
		echo "Verifique que la cedula profesional sea valido!.";
		return false;
	}
	//validar idioma
	$idioma="/^([A-ZÑ\s,])*$/";
	if(!preg_match($idioma, $_POST['idioma']) || empty($_POST['idioma'])) {
		echo "Verifique que la cedula profesional no este vacia!.";
		return false;
	}

	return true;
}// end

function validarFecha($campo){
	$fecha = '/^([0-9]){2}([\\/]){1}([0-9]){2}([\\/]){1}([0-9]){4}$/';
	return preg_match($fecha, $campo);
}
function validateSelect($campo) {
	return $campo==-1;
}
?>
