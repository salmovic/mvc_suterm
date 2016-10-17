<?php
class Departamentos extends Connection
{

		/**
		* Intertar un nuevo departamento
		*/
		public function setDepartamentos()
		{
			$this->setConnection();

			$nombre = $this->con->real_escape_string($_POST['nombre']);
			$responsable = $this->con->real_escape_string($_POST['responsable']);
			$extencion = $this->con->real_escape_string($_POST['extencion']);
			$telefono = $this->con->real_escape_string($_POST['telefono']);

			$sql = "INSERT INTO
					departamento(id_departamento, nombre, responsable, extencion, telefono)
					VALUES (0,'{$nombre}','{$responsable}','{$extencion}','{$telefono}');";

			$exito = $this->con->query($sql);

			$this->unsetConnection();

      return $exito;

		}

		/**
		*Obtener todos los departamentos
		*/
		public function getDepartamentos()
		{
			$sql = "SELECT
							id_departamento, nombre, responsable, extencion, telefono
								FROM departamento";

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
		* Obtener un departamento po id
		* @param $id
		*/
		public function getDepartamentosById( $id )
		{
			$sql = "SELECT
							id_departamento, nombre, responsable, extencion, telefono
								FROM departamento
						  WHERE id_departamento={$id}";

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
		* Actualizar departamento
		*/
		public function updateDepartamentos()
		{
			$this->setConnection();

			$id = $this->con->real_escape_string($_POST['id_departamento']);
			$nombre = $this->con->real_escape_string($_POST['nombre']);
			$responsable = $this->con->real_escape_string($_POST['responsable']);
			$extencion = $this->con->real_escape_string($_POST['extencion']);
			$telefono = $this->con->real_escape_string($_POST['telefono']);

			$sql = "UPDATE departamento
				SET nombre='{$nombre}',responsable='{$responsable}',
					extencion='{$extencion}',telefono='{$telefono}'
						WHERE id_departamento={$id};";

			$exito = $this->con->query($sql);

			$this->unsetConnection();

			return $exito;
		}
		/**
		* Eliminar un departamento
		*/
		public function deleteDepartamentos($id)
		{
			$this->setConnection();
			$sql = "DELETE FROM
								departamento
							WHERE id_departamento = {$id}";
			$exito = $this->con->query($sql);
			$this->unsetConnection();
			return $exito;
		}
}
