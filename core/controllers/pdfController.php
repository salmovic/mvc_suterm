<?php
if( !isset($_SESSION['usr'] ) ) {
	header('location: index.php');
	exit;
}
if(isset($_SESSION['tipo_usr']) && !$_SESSION['tipo_usr'] == 1) {
	header('location:?views=movimientos');
	exit;
}

include 'html/movimientos/pdf.php';
?>
