<?php
/**
 *
 */
class Login extends Connection
{
	public function getLogin( $usr )
	{
		$sql = "SELECT tipo_usuario, nombre, concat(nombre,' ',apellidos) as nomComp, foto, passwd FROM
		usuario WHERE (rpe_emp = '{$usr}' or usr = '{$usr}') LIMIT 1;";
		$this->setConnection();
		$datos = $this->con->query( $sql );
		$reg= $datos->fetch_object();
		$this->unsetConnection();
		return $reg;
	}
}
?>
