<?php
/**
 *
 */
class Login extends Connection
{
	public function getLogin( $usr, $tus )
	{
		$sql = "SELECT tipo_usuario, nombre, concat(nombre,' ',apellidos) as nomComp, foto, passwd FROM
		usuario WHERE (rpe_emp = '{$usr}' or usr = '{$usr}') and tipo_usuario ={$tus} LIMIT 1;";
		$this->setConnection();
		$datos = $this->con->query( $sql );
		$reg= $datos->fetch_object();
		$this->unsetConnection();
		return $reg;
	}
}
?>
