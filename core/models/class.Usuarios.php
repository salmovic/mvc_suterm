<?php
/**
 *
 */
class Usuarios extends Connection
{
	public function setUsuarios()
	{
		$sql= "INSERT INTO
				usuario(id_usuario, rpe_emp, usr, passwd, tipo_usuario, foto)
				VALUES
				(0,'{$_POST['rpe']}','{$_POST['usr']}','{$_POST['passwd']}',
					{$_POST['tipo_usr']},'imagen'";
		$sql = "INSERT INTO usuario(id_usuario, rpe_emp, usr, passwd, tipo_usuario, foto) VALUES
		(0,'{$_POST['rpe']}','{$_POST['usr']}','{$_POST['passwd']}',
		'{$_POST['tipo_usr']}','img')";
		$this->setConnection();
		$exito = $this->con->query( $sql );
		$this->unsetConnection();
		return $exito;
	}
}
?>
