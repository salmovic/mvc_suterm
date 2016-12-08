<?php
/**
 *
 */
class Usuarios extends Connection
{
	/**
	* Guardar usuarios
	*/
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
	/**
	* Obtener dato de todos los usuarios
	*/
	public function getUsuarios() {
		$sql = "SELECT id_usuario, rpe_emp, concat(nombre,' ', apellidos) as nombre, email, usr, passwd, tipo_usuario, foto FROM usuario WHERE 1";
		$this->setConnection();
		$dts= $this->con->query($sql);
		$arrDts=array();
		while( $reg = $dts->fetch_object() ) {
			$arrDts[] = $reg;
		}
		$this->unsetConnection();
		return $arrDts;
	}
/**
* Obtener datos de usuario
* @param $id
*/
	public function getUsuarioById( $id ) {
		$sql = "SELECT  rpe_emp, nombre, apellidos, email, usr, passwd, tipo_usuario, foto FROM usuario WHERE id_usuario = {$id} LIMIT 1";
		$this->setConnection();
		$dts=$this->con->query( $sql );
		$arrDts = $dts->fetch_object();
		$this->unsetConnection();
		return $arrDts;
	}
	/**
	* Actualizar datos del usuario
	*/
	public function updateUsuario() {
		$contrasenia = $_POST['passwd'];
		// Encriptacion de la contrasenia
		$pass = password_hash( $contrasenia, PASSWORD_DEFAULT );

		$sql = "UPDATE usuario SET usr='{$_POST["usr"]}',passwd='{$pass}',tipo_usuario='{$_POST["tipo_usr"]}'
		WHERE id_usuario='{$_POST["id"]}'";
		$this->setConnection();
		$exito = $this->con->query( $sql );
		$this->unsetConnection();
		return $exito;
	}
	/**
	* Eliminar un usuario
	*/
	public function deleteUsuario( $id ) {
		$sql = "DELETE FROM usuario WHERE id_usuario={$id}";
		$this->setConnection();
		$exito=$this->con->query( $sql );
		$this->unsetConnection();
		return $exito;
	}
}
?>
