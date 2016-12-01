<?php
/**
 *
 */
class Login extends Connection
{
	public function getLogin($usr, $pass, $tus)
	{
		$sql = "SELECT tipo_usuario, nombre, concat(nombre,' ',apellidos) as nomComp, foto, count(*) as cont FROM
		usuario WHERE (rpe_emp = '{$usr}' or usr = '{$usr}') and passwd='{$pass}' and tipo_usuario ={$tus};";
		$this->setConnection();

		$datos = $this->con->query( $sql );

		$reg= $datos->fetch_object();

		$this->unsetConnection();

		return $reg;
	}

}
?>
