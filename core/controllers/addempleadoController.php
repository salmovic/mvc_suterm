<?php
if( !isset($_SESSION['usr'] ) ) {
	header('location: index.php');
	exit;
}
include HTML_DIR.'empleados/empleado_add.php';
 ?>
