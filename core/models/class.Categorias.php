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
		$sql = "INSERT INTO categorias(id_categorias, rpe_empleado, id_plaza, estatus)
							VALUES
							(0,'{$_POST["rpe_empleado"]}','{$_POST["no_plaza"]}','{$_POST["status"]}')";
		/*establecer conexion con la BD*/
		$this->setConnection();

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
		$sql = "SELECT cat.id_categorias as id,emp.rpe_empleado as rpe,
		concat(emp.nombre,' ', emp.apellidos) as nombre, p.no_plaza,
		 p.nombre_cat, cat.estatus FROM categorias AS cat
		 INNER JOIN empleados AS emp
		  on cat.rpe_empleado = emp.rpe_empleado
			INNER JOIN plazas AS p
			on cat.id_plaza = p.no_plaza";
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
		$sql = "SELECT cat.id_categorias as id,emp.rpe_empleado as rpe,
		concat(emp.nombre,' ', emp.apellidos) as nombre, p.no_plaza,
		 p.nombre_cat, cat.estatus FROM categorias AS cat
		 INNER JOIN empleados AS emp
		  on cat.rpe_empleado = emp.rpe_empleado
			INNER JOIN plazas AS p
			on cat.id_plaza = p.no_plaza WHERE cat.id_categorias= {$id}";
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
//(0,'{$_POST["rpe_empleado"]}','{$_POST["no_plaza"]}','{$_POST["status"]}')";
		$sql = "UPDATE categorias
								SET rpe_empleado='{$_POST['rpe_empleado']}',id_plaza='{$_POST['no_plaza']}',estatus='{$_POST['status']}'
									WHERE id_categorias={$_POST['id']};";
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
		$sql = "DELETE FROM categorias WHERE id_categorias={$id}";
		$this->setConnection();

		$exito = $this-> con ->query($sql);

		$this-> unsetConnection();

		return $exito;
	}
}
 ?>
