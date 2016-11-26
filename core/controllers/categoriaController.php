<?php
if( !isset($_SESSION['usr']) ) {
	header('location: index.php');
	exit;
}
if( $_SESSION['tipo_usr'] == 0 ) {
	header('location: ?views=addempleado');
}
include 'html/categorias/categorias.php';
 ?>
