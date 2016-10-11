<?php
/*
*Clase que extiende a una clase padre {Conexion}
*/
class Categorias extends Conexion
{
	/**
	* Establecer una nueva categoria
	*/
	public function setCategorias()
	{
		/*
		*Instruccion sql
		*/
		$sql = "INSERT INTO
						categorias(id_categorias, no_plaza, categoria, plaza_actual, grupo_organico,
			 			nivel_desempenio, nivel_remuneracion, grupo_nivel, plan_carrera)
						VALUES
						(0,'{$_POST['no_plaza']}','{$_POST['categoria']}','{$_POST['plaza_actual']}','{$_POST['grupo_organico']}',
						'{$_POST['nivel_desempenio']}','{$_POST['nivel_remuneracion']}','{$_POST['grupo_nivel']}','{$_POST['plan_carrera']}')";
						
		/*Establecer la conexion*/
		$this->setConexion();

		$exit = $this->con->query($sql);

		/*Cerrar la conexion*/
		$this->unsetConexion();

		return $exit;
	}
}
 ?>
