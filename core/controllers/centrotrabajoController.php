<?php
if( !isset($_SESSION['usr'] ) ) {
	header('location: index.php');
	exit;
}
include 'html/centro_trabajo/centro_trabajo.php';
?>
