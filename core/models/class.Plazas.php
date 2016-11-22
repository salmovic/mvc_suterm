<?php
/*
*Clase que extiende a una clase padre {Connection}
*/
class Plazas extends Connection
{
	/**
	* Establecer una nueva plaza	*/

	public function setPlazas()
	{
		/*establecer conexion con la BD*/
		$this->setConnection();

		/*Escapando caracteres espciales*/
		$no_plaza = $this-> con-> real_escape_string($_POST['no_plaza']);
		$nombre_cat = $this-> con-> real_escape_string($_POST['nombre_cat']);
		$grupo_organico = $_POST['grupo_organico'];
		$nivel_desempenio = $_POST['nivel_desempenio'];
		$nivel_remuneracion = $_POST['nivel_remuneracion'];
		$grupo_nivel = $_POST['grupo_nivel']; //(go+nd)
		$plan_carrera = $this-> con-> real_escape_string($_POST['plan_carrera']);
		$grupo =$this-> con-> real_escape_string( $_POST['grupo']);
		$unidad = $this-> con-> real_escape_string($_POST['unidad']);
		/*Sentencia sql*/
		$sql = "INSERT INTO plazas(no_plaza, nombre_cat, grupo_organico,
			 nivel_desempenio, nivel_remuneracion, grupo_nivel, plan_carrera, grupo, unidad)
			  VALUES ('{$no_plaza}','{$nombre_cat}',{$grupo_organico},{$nivel_desempenio},
					{$nivel_remuneracion},{$grupo_nivel},'{$plan_carrera}','{$grupo}','{$unidad}')";

		/*Ejecuta la sentencia sql*/
		$exit = $this->con->query( $sql );

		/*Cerrar la conexion conexion con la BD*/
		$this->unsetConnection();

		/*Devuelve el estado de la consulta*/
		return $exit;
	}
	/**
	*Obtener todas las plaza
	*/
	public function getPlazas()
	{
		$sql = "SELECT no_plaza, nombre_cat, grupo_organico,
		 nivel_desempenio, nivel_remuneracion, grupo_nivel,
		  plan_carrera, grupo, unidad FROM plazas WHERE 1";

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
 /*
	* Obtener una plazapor id
	* @param id_plaza
	*/
	public function getPlazasById( $id )
	{
		$sql = "SELECT no_plaza, nombre_cat, grupo_organico, nivel_desempenio, nivel_remuneracion,
		 grupo_nivel, plan_carrera, grupo, unidad FROM plazas WHERE no_plaza = '{$id}' LIMIT 1";
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
	/*
	* Actualizar plaza
	* @param id_plaza
	*/
	public function updatePlazas()
	{
		/*establecer conexion con la BD*/
		$this->setConnection();

		/*Escapando caracteres espciales*/
		$no_plaza = $this-> con-> real_escape_string($_POST['no_plaza']);
		$nombre_cat = $this-> con-> real_escape_string($_POST['nombre_cat']);
		$grupo_organico = $_POST['grupo_organico'];
		$nivel_desempenio = $_POST['nivel_desempenio'];
		$nivel_remuneracion = $_POST['nivel_remuneracion'];
		$grupo_nivel = $_POST['grupo_nivel']; //(go+nd)
		$plan_carrera = $this-> con-> real_escape_string($_POST['plan_carrera']);
		$grupo =$this-> con-> real_escape_string( $_POST['grupo']);
		$unidad = $this-> con-> real_escape_string($_POST['unidad']);

		$sql = "UPDATE plazas SET
									nombre_cat='{$nombre_cat}',grupo_organico='{$grupo_organico}',nivel_desempenio={$nivel_desempenio},
									nivel_remuneracion={$nivel_remuneracion},grupo_nivel={$grupo_nivel},plan_carrera='{$plan_carrera}',
									grupo='{$grupo}',unidad='{$unidad}' WHERE no_plaza='$no_plaza'";

		/*Ejecuta la sentencia sql*/
		$exit = $this->con->query( $sql );

		/*Cerrar la conexion conexion con la BD*/
		$this->unsetConnection();

		/*Devuelve el estado de la consulta*/
		return $exit;
	}
	/*
	* Eliminar una plaza	* @param id_plaza
	*/
	public function deletePlazas( $id )
	{
		$sql = "DELETE FROM plazas
								 	 WHERE no_plaza = '{$id}';";
		$this->setConnection();

		$exito = $this-> con ->query($sql);

		$this-> unsetConnection();

		return $exito;
	}
}
 ?>
