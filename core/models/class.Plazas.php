<?php
/*
*Clase que extiende a una clase padre {Connection}
*/
class Plazas extends Connection
{
	/**
	* Establecer una nueva categoria
	*/

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
	*Obtener todas las categorias
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
	* Obtener una categoria por id
	* @param id_categorias
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
	* Actualizar categorias
	* @param id_categorias
	*/
	public function updatePlazas()
	{
		/*establecer conexion con la BD*/
		$this->setConnection();

		/*Escapando caracteres espciales*/
		$id_categorias = $this-> con-> real_escape_string($_POST['id_categorias']);
		$no_plaza = $this-> con-> real_escape_string($_POST['no_plaza']);
		$categoria = $this-> con-> real_escape_string($_POST['categoria']);
		$plaza_actual = $this-> con-> real_escape_string($_POST['plaza_actual']);
		$grupo_organico = $this-> con-> real_escape_string($_POST['grupo_organico']);
		$nivel_desempenio = $this-> con-> real_escape_string($_POST['nivel_desempenio']);
		$nivel_remuneracion = $this-> con-> real_escape_string($_POST['nivel_remuneracion']);
		$grupo_nivel = $this-> con-> real_escape_string($_POST['grupo_nivel']);
		$plan_carrera = $this-> con-> real_escape_string($_POST['plan_carrera']);

		$sql = "UPDATE categorias
					SET no_plaza='{$no_plaza}',categoria='{$categoria}',plaza_actual='{$plaza_actual}',
						grupo_organico='{$grupo_organico}',nivel_desempenio='{$nivel_desempenio}',nivel_remuneracion='{$nivel_remuneracion}',
						grupo_nivel='{$grupo_nivel}',plan_carrera='{$plan_carrera}'
					WHERE id_categorias= '{$id_categorias}';";

		/*Ejecuta la sentencia sql*/
		$exit = $this->con->query( $sql );

		/*Cerrar la conexion conexion con la BD*/
		$this->unsetConnection();

		/*Devuelve el estado de la consulta*/
		return $exit;
	}
	/*
	* Eliminar una categoria
	* @param id_categorias
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
