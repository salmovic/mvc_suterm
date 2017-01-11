<?php
/**
 *
 */
class Empleado extends Connection
{
	/**
	* Funcion para obtener todos los empleados
	*/
	public function getEmpleados() {
		$sql = "SELECT emp.rpe_empleado AS rpe, concat(emp.nombre,' ',emp.apellidos)AS nombre, emp.curp,
						emp.email, emp.celular, emp.fecha_ingreso_empresa AS in_empresa, emp.fecha_ingreso_suterm AS in_suterm,
						  dep.nombre AS departamento, emp.nivel_escolaridad AS niv_esc,
						 emp.cedula_profesional AS ced_prof FROM empleados AS emp
						 INNER JOIN departamento AS dep
						 ON emp.id_departamento = dep.id_departamento
						 WHERE 1";
		$this->setConnection();

		 $datos = $this->con->query( $sql );
	    $arreglo = array();
	    while ( $reg= $datos->fetch_object() ) {
	        $arreglo[] = $reg;
	    }

		$this->unsetConnection();

	  return $arreglo;
	}
	/**
	* Funcion que permite agragar un nuevo empleado
	*/
	public function setEmpleado()
	{
		/*Establecer conexion con la bd*/
		$this->setConnection();
		    /*Formato de fecha*/
		  $fecha_nacimiento = date('Y-m-d',strtotime($_POST['fecha_nacimiento']));
			$fecha_nac_conyugue = date('Y-m-d',strtotime($_POST['fecha_nac_conyugue']));
			$fecha_ingreso_empresa = date('Y-m-d',strtotime($_POST['fecha_ingreso_empresa']));
			$fecha_ingreso_suterm = date('Y-m-d',strtotime($_POST['fecha_ingreso_suterm']));
			$fecha_ing_sector_electrico = date('Y-m-d',strtotime($_POST['fecha_ing_sector_electrico']));
		/*Escapar caracteres*/
		$rpe=$this->con->real_escape_string($_POST['rpe']);
		$nombre=$this->con->real_escape_string($_POST['nombre']);
		$apellidos=$this->con->real_escape_string($_POST['apellidos']);
		$rfc=$this->con->real_escape_string($_POST['rfc']);
		$curp=$this->con->real_escape_string($_POST['curp']);
		$no_seguro=$this->con->real_escape_string($_POST['no_seguro']);
		$tipo_sangre=$this->con->real_escape_string($_POST['tipo_sangre']);
		$lugar_nacimiento=$this->con->real_escape_string($_POST['lugar_nacimiento']);
		$entidad_federativa_nac=$this->con->real_escape_string($_POST['entidad_federativa_nac']);

		$nacionalidad=$this->con->real_escape_string($_POST['nacionalidad']);
		$domicilio=$this->con->real_escape_string($_POST['domicilio']);
		$colonia=$this->con->real_escape_string($_POST['colonia']);
		$codigo_postal=$this->con->real_escape_string($_POST['codigo_postal']);
		$municipio_dom=$this->con->real_escape_string($_POST['municipio_dom']);
		$entidad_federativa_dom=$this->con->real_escape_string($_POST['entidad_federativa_dom']);
		$email=$this->con->real_escape_string($_POST['email']);
		$telefono=$this->con->real_escape_string($_POST['telefono']);
		$celular=$this->con->real_escape_string($_POST['celular']);

		$estado_civil=$this->con->real_escape_string($_POST['estado_civil']);
		$nombre_conyugue=$this->con->real_escape_string($_POST['nombre_conyugue']);
		$dom_conyugue=$this->con->real_escape_string($_POST['dom_conyugue']);
		$num_depen_econ=$_POST['num_depen_econ'];
		$tipo_contrato=$this->con->real_escape_string($_POST['tipo_contrato']);
		$antiguedad=$this->con->real_escape_string($_POST['antiguedad']);
		$id_centro_trabajo=$_POST['id_centro_trabajo'];
		$id_departamento=$_POST['id_departamento'];
		$nivel_escolaridad=$this->con->real_escape_string($_POST['nivel_escolaridad']);
		$escuela_egresado=$this->con->real_escape_string($_POST['escuela_egresado']);
		$cedula_profesional=$this->con->real_escape_string($_POST['cedula_profesional']);
		$idioma=$this->con->real_escape_string($_POST['idioma']);

		$sql = "INSERT INTO empleados VALUES ('{$rpe}','{$nombre}','{$apellidos}','{$rfc}','{$curp}','{$no_seguro}','{$tipo_sangre}',
			'{$fecha_nacimiento}','{$lugar_nacimiento}','{$entidad_federativa_nac}','{$nacionalidad}','{$domicilio}','{$colonia}',
			'{$codigo_postal}','{$municipio_dom}','{$entidad_federativa_dom}','{$email}','{$telefono}','{$celular}',
			'{$estado_civil}','{$nombre_conyugue}','{$dom_conyugue}','{$fecha_nac_conyugue}','{$num_depen_econ}','{$tipo_contrato}','{$fecha_ingreso_empresa}','{$fecha_ingreso_suterm}',
			'{$fecha_ing_sector_electrico}','{$antiguedad}',{$id_centro_trabajo},{$id_departamento},'{$nivel_escolaridad}','{$escuela_egresado}','{$cedula_profesional}','{$idioma}')";
	/*ejecutar la sentencia sql*/
	$exito = $this->con->query( $sql );

	/*Cerrar la conexion */
	$this->unsetConnection();

	return $exito;

	}
	/**
	* Funcion para obtener un empleado
	* @param rpe
	*/
	public function getEmpleadoById( $rpe ) {
		$sql = "SELECT rpe_empleado, nombre, apellidos, rfc, curp, no_seguro, tipo_sangre, fecha_nacimiento, lugar_nacimiento,
 entidad_federativa_nac, nacionalidad, domicilio, colonia, codigo_postal, municipio_dom, entidad_federativa_dom,
  email, telefono, celular, estado_civil, nombre_conyugue, dom_conyugue, fecha_nac_conyugue, num_depen_econ,
	 tipo_contrato, fecha_ingreso_empresa, fecha_ingreso_suterm, fecha_ing_sector_electrico, antiguedad,
 id_centro_trabajo, id_departamento, nivel_escolaridad, escuela_egresado, cedula_profesional, idioma
  FROM empleados
  WHERE rpe_empleado= '{$rpe}'";
	$this->setConnection();
	$reg = $this->con->query( $sql );
	$datos = $reg->fetch_object();
	$this->unsetConnection();
	return $datos;
	}
	/**
	* Funcion para eliminar un empleado
	* @param rpe
	*/
	public function deleteEmpleado( $rpe ) {
		$sql = "";
		$this->setConnection();
		$this->unsetConnection();

	}
	/**
	* Funcion para acutalizar un empleado
	*/
	public function updateEmpleado()
	{
		$this->setConnection();

		$fecha_nacimiento = date('Y-m-d',strtotime($_POST['fecha_nacimiento']));
		$fecha_nac_conyugue = date('Y-m-d',strtotime($_POST['fecha_nac_conyugue']));
		$fecha_ingreso_empresa = date('Y-m-d',strtotime($_POST['fecha_ingreso_empresa']));
		$fecha_ingreso_suterm = date('Y-m-d',strtotime($_POST['fecha_ingreso_suterm']));
		$fecha_ing_sector_electrico = date('Y-m-d',strtotime($_POST['fecha_ing_sector_electrico']));

		$sql="UPDATE empleados SET nombre='{$_POST["nombre"]}',apellidos='{$_POST["apellidos"]}',rfc='{$_POST["rfc"]}',curp='{$_POST["curp"]}',no_seguro='{$_POST["no_seguro"]}',tipo_sangre='{$_POST["tipo_sangre"]}',fecha_nacimiento='{$fecha_nacimiento}',lugar_nacimiento='{$_POST["lugar_nacimiento"]}',entidad_federativa_nac='{$_POST["entidad_federativa_nac"]}',nacionalidad='{$_POST["nacionalidad"]}',domicilio='{$_POST["domicilio"]}',colonia='{$_POST["colonia"]}',codigo_postal='{$_POST["codigo_postal"]}',municipio_dom='{$_POST["municipio_dom"]}',entidad_federativa_dom='{$_POST["entidad_federativa_dom"]}',email='{$_POST["email"]}',telefono='{$_POST["telefono"]}',celular='{$_POST["celular"]}',estado_civil='{$_POST["estado_civil"]}',nombre_conyugue='{$_POS_POST["nombre_conyugue"]}',dom_conyugue='{$_POST["dom_conyugue"]}',fecha_nac_conyugue='{$fecha_nac_conyugue}',num_depen_econ={$_POST["num_depen_econ"]},tipo_contrato='{$_POST["tipo_contrato"]}',fecha_ingreso_empresa='{$fecha_ingreso_empresa}',fecha_ingreso_suterm='{$fecha_ingreso_suterm}',fecha_ing_sector_electrico='{$fecha_ing_sector_electrico}',antiguedad={$_POST["antiguedad"]},id_centro_trabajo={$_POST["id_centro_trabajo"]},id_departamento={$_POST["id_departamento"]},nivel_escolaridad='{$_POST["nivel_escolaridad"]}',escuela_egresado='{$_POST["escuela_egresado"]}',cedula_profesional='{$_POST["cedula_profesional"]}',idioma='{$_POST["idioma"]}' WHERE rpe_empleado='{$_POST["rpe"]}'";

		$exito = $this->con->query( $sql );

		$this->unsetConnection();
		return $exito;
	}
}

 ?>
