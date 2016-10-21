<?php /**
 *
 */
class Movimientos extends Connection
{
	public function getEmpleadoByRpe( $id )
	{
		$sql = "SELECT concat(emp.nombre,' ',emp.apellidos) as nombre,
	cat.categoria as categoria,cat.no_plaza as plaza, cat.grupo_nivel as grupo,
    dep.nombre as departamento
	FROM empleados as emp
    inner join categorias as cat
    	on emp.id_categoria = cat.id_categorias
    INNER JOIN departamento as dep
    	on emp.id_departamento = emp.id_departamento
     WHERE emp.rpe_empleado = '{$id}';";

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
