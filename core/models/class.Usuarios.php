<?php
/**
 *
 */
class Usuarios extends Connection
{
	public function setUsuarios()
	{

		$contrasenia = $_POST['passwd'];
		// Encriptacion de la contrasenia
		$pass = password_hash( $contrasenia, PASSWORD_DEFAULT );

		$sql = "INSERT INTO usuario(id_usuario, rpe_emp, nombre, apellidos, email, usr, passwd, tipo_usuario, foto)
								VALUES (0,'{$_POST["rpe"]}','{$_POST["nombre"]}','{$_POST["app"]}','{$_POST["email"]}','{$_POST["usr"]}',
									'{$pass}','{$_POST["tipo_usr"]}','img')";
		$this->setConnection();
		$exito = $this->con->query( $sql );
		$this->unsetConnection();
		return $exito;
	}
	/**
	* Obtener informacion basica del empleado a registrar
	*/
	public function getEmpleado( $rpe ) {
		$sql = "SELECT nombre, apellidos, email
						FROM empleados
						WHERE rpe_empleado ='{$rpe}' LIMIT 1;";
		$this->setConnection();
		$dts = $this->con->query( $sql );
		$person = $dts->fetch_object();
		$this->unsetConnection();
		return $person;
	}
}
?>
