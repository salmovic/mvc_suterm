<?php
/*
*Clase que extiende a una clase padre {Connection}
*/
class Categorias extends Connection
{
	/**
	* Establecer una nueva categoria
	*/

	public function setCategorias()
	{
		/*establecer conexion con la BD*/
		$this->setConnection();

		/*Escapando caracteres espciales*/
		$no_plaza = $this-> con-> real_escape_string($_POST['no_plaza']);
		$categoria = $this-> con-> real_escape_string($_POST['categoria']);
		$plaza_actual = $this-> con-> real_escape_string($_POST['plaza_actual']);
		$grupo_organico = $this-> con-> real_escape_string($_POST['grupo_organico']);
		$nivel_desempenio = $this-> con-> real_escape_string($_POST['nivel_desempenio']);
		$nivel_remuneracion = $this-> con-> real_escape_string($_POST['nivel_remuneracion']);
		$grupo_nivel = $this-> con-> real_escape_string($_POST['grupo_nivel']);
		$plan_carrera = $this-> con-> real_escape_string($_POST['plan_carrera']);

		/*Sentencia sql*/
		$sql = "INSERT INTO
			categorias(id_categorias, no_plaza, categoria, plaza_actual, grupo_organico,
				 nivel_desempenio, nivel_remuneracion, grupo_nivel, plan_carrera)
				 	VALUES
			(0,'{$no_plaza}','{$categoria}','{$plaza_actual}','{$grupo_organico}',
			'{$nivel_desempenio}','{$nivel_remuneracion}','{$grupo_nivel}','{$plan_carrera}');";

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
	public function getCategorias()
	{
		$sql = "SELECT
		id_categorias, no_plaza, categoria, plaza_actual, grupo_organico,
			 nivel_desempenio, nivel_remuneracion, grupo_nivel, plan_carrera
							FROM categorias";

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
	public function getCategoriasById( $id )
	{
		$sql = "SELECT
		id_categorias, no_plaza, categoria, plaza_actual, grupo_organico,
			 nivel_desempenio, nivel_remuneracion, grupo_nivel, plan_carrera
							FROM categorias WHERE id_categorias={$id} LIMIT 1";

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
	public function updateCategorias()
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
	public function deleteCategorias( $id )
	{
		$sql = "DELETE FROM
								categorias
								 	 WHERE id_categorias = {$id};";
		$this->setConnection();

		$exito = $this-> con ->query($sql);

		$this-> unsetConnection();

		return $exito;
	}
}
 ?>
