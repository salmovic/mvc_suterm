<?php
/**
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
	* Obtener filtro de sugerencias que sean aptos por el numero de plaza
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
	/**
	* Guardar el empleado sustituto
	*/
	public function setSustituto() {
		$fecha_in = date('Y-m-d',strtotime($_POST['fecha_in']));
		$fecha_fin = date('Y-m-d',strtotime($_POST['fecha_fin']));
		$sql = "INSERT INTO
				mov_sustituto(id_mov_sust, no_folio,rpe_emp,cat_actual, cat_propuesta, no_plaza, fecha_inicio, fecha_fin)
				 VALUES (0,'{$_POST["folio_mov"]}','{$_POST["rpe_empleado"]}','{$_POST["cat_actual"]}','{$_POST["cat_propuesta"]}',
					 '{$_POST["no_plaza"]}','{$fecha_in}','{$fecha_fin}')";
		$this->setConnection();
			$exito = $this->con->query( $sql );
		$this->unsetConnection();
		return $exito;
	}
	/**
	* Obtener los empleados sustitutos del numero de folio acutal.
	*/
	public function getSustitutos( $no_folio ) {
		$sql = "SELECT ms.id_mov_sust as id,em.rpe_empleado as rpe, concat(em.nombre,' ',em.apellidos) as nombre,
		ms.cat_actual, ms.cat_propuesta, ms.no_plaza, ms.fecha_inicio, ms.fecha_fin, cat.id_plaza as plazaactual
FROM mov_sustituto	AS ms
		INNER JOIN empleados as em
        	on ms.rpe_emp = em.rpe_empleado
        INNER JOIN categorias as cat
        	on em.rpe_empleado= cat.rpe_empleado
WHERE no_folio = '{$no_folio}' and cat.estatus = 1";
		$this->setConnection();
		$dts = $this->con->query( $sql );
		$arr = array();
			while( $reg = $dts->fetch_object() ) {
					$arr[] = $reg;
			}
		$this->unsetConnection();
		return $arr;
	}
	/**
	* Eliminar un sustituto
	*/
	public function deleteSustituto( $id ) {
		$sql = "DELETE FROM mov_sustituto WHERE id_mov_sust ={$id}";
		$this->setConnection();
		$exito = $this->con->query( $sql );
		$this->unsetConnection();
		return $exito;
	}
	/**
	* Guardar movmiento
	*/
	public function saveMovimiento() {
		$fechaSistema = date('Y-m-d');
		$f_inicio= date('Y-m-d',strtotime($_POST['fechainicio']));
		$f_fin= date('Y-m-d',strtotime($_POST['fechafin']));

		$sql = "INSERT INTO movimientos(no_folio, fecha, id_tipo_permiso, rpe_solicitante, fecha_inicio, fecha_fin, sec_suterm, id_delegado, jefe_inmediato, observaciones)
		 VALUES ('{$_POST["folio_mov"]}','{$fechaSistema}',{$_POST["tipo_perm"]},'{$_POST["rpe_empleado"]}',
			 '{$f_inicio}','{$f_fin}','{$_POST["sec_suterm"]}','{$_POST["delegado"]}','{$_POST["jefe_inmed"]}','{$_POST["descripcion"]}');";
		$this->setConnection();
		$exito = $this->con->query( $sql );
		$this->unsetConnection();
		return $exito;
	}
	/**
	* Obtener un movimiento
	* @param no_folio
	*/
	public function getMovimiento( $folio ) {
		$format = "SET lc_time_names = 'es_MX'";
		$sql="SELECT no_folio, date_format(fecha,'%W %d de %M de %Y') AS fecha,
		 id_tipo_permiso, rpe_solicitante, date_format(fecha_inicio,'%W %d de %M de %Y')AS fechain,date_format( fecha_fin,'%W %d de %M de %Y') as fechafin, sec_suterm, id_delegado, jefe_inmediato, observaciones
			FROM movimientos
			WHERE no_folio = {$folio} LIMIT 1";
		$this->setConnection();
					 $this->con->query( $format );
		$arr = $this->con->query( $sql );
		$dtsMov = $arr->fetch_object();
		$this->unsetConnection();
		return $dtsMov;
	}
}
 ?>
