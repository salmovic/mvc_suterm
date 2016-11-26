<?php
if( !isset($_SESSION['usr'] ) ) {
	header('location: index.php');
	exit;
}
include 'html/departamentos/departamentos.php';
 ?>
