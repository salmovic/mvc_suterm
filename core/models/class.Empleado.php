<?php
/**
 *
 */
class Empleado extends Connection
{
	public function getEmpleados()
	{
		$sql = "SELECT
						rpe_empleado, nombre, apellidos
							FROM empleados;";

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
	public function setEmpleado()
	{}
	public function getEmpleadoById($id)
	{}
	public function deleteEmpleado($id)
	{}
	public function updateEmpleado()
	{}
}

 ?>
