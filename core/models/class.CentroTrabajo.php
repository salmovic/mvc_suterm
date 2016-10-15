<?php
/**
* Clase que permite establecer el CRUD de la tabla centro_de_trabajo
*/
class CentroTrabajo extends Connection
{
	/**
	* Create centro_de_trabajo
	*/
	public function setCentroTrabajo()
	{
		/*conection open*/
		$this->setConnection();

		/*Escapendo caracteres especiales*/
		$id_centrab = $_POST['id_centro_trabajo'];
		 $nombre = $this->con->real_escape_string($_POST['nombre']);
		 $domicilio = $this->con->real_escape_string($_POST['domicilio']);
		 $codigo_postal = $this->con->real_escape_string($_POST['codigo_postal']);
		 $municipio = $this->con->real_escape_string($_POST['municipio']);
		 $entidad_fed = $this->con->real_escape_string($_POST['entidad_fed']);
		 $telefono = $this->con->real_escape_string($_POST['telefono']);

		/*Sentencia sql*/
		$sql = "INSERT INTO centro_de_trabajo
				(id_centro_trabajo, nombre, domicilio, codigo_postal, municipio, entidad_fed, telefono)
			 		VALUES
					($id_centrab,'{$nombre}','{$domicilio}','{$codigo_postal}',
						'{$municipio}','{$entidad_fed}','{$telefono}')";

		$exito = $this->con->query( $sql );
		/*Cerrar conexion*/
		$this-> unsetConnection();

	  return $exito;
	}
	/**
	* Obtener todos los centros de trabajo
	*/
	public function getCentroTrabajo()
	{
		$sql = "SELECT
					id_centro_trabajo, nombre, domicilio, codigo_postal, municipio, entidad_fed, telefono
					FROM centro_de_trabajo";

		$this->setConnection();

		$datos = $this->con->query( $sql );

		$arreglo = array();
		while ( $reg= $datos->fetch_object() )
		{
		    $arreglo[] = $reg;
		}

		$this-> unsetConnection();

		return $arreglo;
	}
	/*Delete centro trabajo*/
	public function deleteCentroTrabajo($id)
	{
		$sql = "DELETE FROM
							centro_de_trabajo
						where
						  id_centro_trabajo={$id}";
    $this->setConnection();
			$exito = $this->con->query($sql);
		$this->unsetConnection();
		return $exito;
	}
}
?>
