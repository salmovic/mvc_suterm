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
		$sql = "INSERT INTO
						categorias(id_categorias, no_plaza, categoria, plaza_actual, grupo_organico,
			 			nivel_desempenio, nivel_remuneracion, grupo_nivel, plan_carrera)
						VALUES
						(0,'{$_POST['no_plaza']}','{$_POST['categoria']}','{$_POST['plaza_actual']}','{$_POST['grupo_organico']}',
						'{$_POST['nivel_desempenio']}','{$_POST['nivel_remuneracion']}','{$_POST['grupo_nivel']}','{$_POST['plan_carrera']}')";

		$this->setConnection();

		$exit = $this->con->query( $sql );

		$this->unsetConnection();

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
}
 ?>
