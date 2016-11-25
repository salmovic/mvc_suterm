<?php
/**
 *
 */
class Login extends Connection
{
	public function getLogin($usr, $pass, $tus)
	{
		$sql = "SELECT u.tipo_usuario,u.foto, e.nombre, count(*) as cont
		FROM usuario u
		INNER JOIN empleados as e
		on u.rpe_emp = e.rpe_empleado
		WHERE (u.rpe_emp = '{$usr}' or u.usr = '{$usr}') and (u.passwd='{$pass}' and u.tipo_usuario={$tus})";
		$this->setConnection();

		$datos = $this->con->query( $sql );

		$reg= $datos->fetch_object();

		$this->unsetConnection();

		return $reg;
	}

}
?>
