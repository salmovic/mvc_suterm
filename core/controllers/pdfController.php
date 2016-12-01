<?php
if( !isset($_SESSION['usr'] ) ) {
	header('location: index.php');
	exit;
}
if(isset($_SESSION['tipo_usr']) && !$_SESSION['tipo_usr'] == 1) {
	header('location:?views=movimientos');
	exit;
}
if ( $BAND_PDF==0 ) {
	if($_SESSION['tipo_usr'] == 1) {
		header('location:?views=movimientos');
	}else {
		header('location:?views=addempleado');
	}
}
include 'html/movimientos/pdf.php';
?>
