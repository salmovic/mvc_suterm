<?php
if( !isset($_SESSION['usr'] ) ) {
	header('location: index.php');
	exit;
}
if( $_SESSION['tipo_usr'] == 0 ) {
	header('location: ?views=addempleado');
	exit;
}
 if(isset($_SESSION['rpe_emp'])) {
	 include 'html/empleados/empleado_update.php';
 }
 header("Location:?views=searchemp");
 ?>
