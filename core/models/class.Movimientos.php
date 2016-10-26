<?php /**
 *
 */
class Movimientos extends Connection
{
	/*Obtenemos los datos del empleado solicitante*/
	public function getEmpleadoByRpe( $id )
	{
		$sql = "SELECT emp.rpe_empleado AS rpe,
						concat(emp.nombre,' ',emp.apellidos) AS nombre,
						plz.no_plaza AS noplaza,
						plz.nombre_plaza AS nomcat,
						cat.estatus AS estatus,
						plz.peso AS gruponivel,
						plz.grupo AS grupo,
						plz.unidad AS unidad
							FROM categorias AS cat
						    	INNER JOIN empleados AS emp
						        	ON cat.rpe_empleado = emp.rpe_empleado
						        INNER JOIN plazas AS plz
						        	ON cat.id_plaza = plz.no_plaza
						     WHERE cat.estatus=1 AND emp.rpe_empleado='{$id}';";
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
}
 ?>
