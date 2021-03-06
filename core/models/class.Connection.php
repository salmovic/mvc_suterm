<?php
class Connection
{
		protected $con;
		/*
		*Establece la conexion a la base de datos
		*/
		protected function setConnection()
		{
			$this->con = new mysqli(
									DB_HOST,
									DB_USER,
									DB_PASS,
									DB_NAME
								);
			$this->setNames();
			return $this->con;
		}
		/*
	 * Establecer cotejamiento utf8
	 */
	 private function setNames()
	 {
			 return $this->con->set_charset('utf8');
	 }
	 /*
	 *Cerrar la conexion
	 */
	 protected function unsetConnection()
	 {
		 $this->con->close();
	 }
}
?>
