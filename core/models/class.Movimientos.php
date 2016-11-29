<?php /**
 *
 */
class Movimientos extends Connection
{
	/**
	* Obtener la informacion del empleado solicitante
	*/
	public function getEmpleadoSol( $txt )
	{
		$sql = "SELECT e.rpe_empleado as rpe, concat(e.nombre,' ',e.apellidos) as nombre,
										p.nombre_cat as categoria, p.no_plaza,
								    p.grupo, p.unidad, d.nombre as area_adscrita
								FROM empleados e
									INNER JOIN categorias c
								    	ON e.rpe_empleado = c.rpe_empleado
								    INNER JOIN plazas p
								    	ON c.id_plaza = p.no_plaza
								    INNER JOIN departamento d
								    	on e.id_departamento = d.id_departamento
								    where c.estatus = 1 AND concat(e.rpe_empleado,' ',e.nombre,' ',e.apellidos) LIKE '%{$txt}%' LIMIT 1";
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
	* Obtener el ultimo id
	*/
	public function getIdMaxMov()
	{
		$sql = "SELECT max(no_folio) as folio FROM movimientos";
		 $this->setConnection();
		 	$dts= $this->con->query($sql);
			$reg = $dts->fetch_object();
		 $this->unsetConnection();
		return $reg->folio+1;
	}
	/**
	* Obtener filtro de sugerencias
	*/
	public function getEmpleadoSugerido( $noPlaza ) {
		$sql = "SELECT e.rpe_empleado as rpe,concat(e.nombre,' ',e.apellidos) as nombre,
						p.nombre_cat
				 FROM categorias c
				 	INNER JOIN plazas p
				     ON c.id_plaza = p.no_plaza
				    INNER JOIN empleados e
				     ON c.rpe_empleado = e.rpe_empleado
				   WHERE p.no_plaza = '{$noPlaza}' and c.estatus = 0";
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
