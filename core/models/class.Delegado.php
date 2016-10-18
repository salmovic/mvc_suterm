<?php
/**
 * CRUD Deelegado
 */
class Delegado extends Connection
{
	/**
	* Intertar un Delegado
	*/
	public function setDelegado()
	{
		$this->setConnection();
		$rpe_delegado = $this->con->real_escape_string($_POST['rpe_delegado']);
		$descripcion = $this->con->real_escape_string($_POST['descripcion']);

		$sql = "INSERT INTO delegados (id_delegado, rpe_delegado, descripcion)
					VALUES (0, '{$rpe_delegado}', '{$descripcion}');";

		$exito = $this->con->query($sql);

		$this->unsetConnection();

	  return $exito;
	}

	/**
	*Obtener todos los Delegados
	*/
	public function getDelegados()
	{
		$sql = "SELECT del.id_delegado,concat(emp.nombre,' ',emp.apellidos) as nombre, del.descripcion
		FROM delegados as del
			INNER JOIN empleados as emp
		on del.rpe_delegado = emp.rpe_empleado;";

		$this->setConnection();

		 $datos = $this->con->query( $sql );
			$arreglo = array();
			while ( $reg= $datos->fetch_object() )
			{
					$arreglo[] = $reg;
			}

		$this->unsetConnection();

			return $arreglo;
	}
	/**
	* Obtener delegados por id
	* @param $id
	*/
	public function getDelegadosById($id)
	{
		$sql = "SELECT id_delegado, rpe_delegado, descripcion
			FROM delegados
			WHERE id_delegado={$id};";

		$this->setConnection();

		 $datos = $this->con->query( $sql );
			$arreglo = array();
			while ( $reg= $datos->fetch_object() )
			{
					$arreglo[] = $reg;
			}

		$this->unsetConnection();

			return $arreglo;
	}
	/**
	* Eliminar un delegado
	* @param $id
	*/
	public function deleteDelegado($id)
	{
		$sql = "DELETE FROM delegados
						WHERE id_delegado={$id};";
		$this->setConnection();
		  $exito = $this->con->query($sql);
		$this->unsetConnection();

		return $exito;
	}
	/*
	* Actualizar descripcion delegado
	*/
	public function updateDelegado()
	{
		$this->setConnection();

		$id = $_POST['id_delegado'];
		$descripcion = $this->con->real_escape_string($_POST['descripcion']);

		$sql = "UPDATE delegados
								SET descripcion='{$descripcion}'
						 WHERE id_delegado={$id};";
		$exito = $this->con->query( $sql );
		$this->unsetConnection();

		return $exito;
	}
}

?>
