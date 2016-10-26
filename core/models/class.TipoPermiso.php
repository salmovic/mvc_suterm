<?php
/**
 *
 */
class TipoPermiso extends Connection
{
	public function getTipoPermiso()
	{
		$sql = "SELECT id_tipo_permiso, nombre, descripcion FROM tipo_permiso;";
		$this->setConnection();
		$datos = $this->con->query($sql);
		$arreglo=array();
		while ( $reg = $datos->fetch_object() )
		{
			$arreglo[] = $reg;
		}
		$this->unsetConnection();
		return $arreglo;
	}
}
 ?>
