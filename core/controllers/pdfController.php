<?php
if(!isset($_SESSION['usr'])){
	header('location: index.php');
	exit;
}
if (!isset($_SESSION['folio_pdf'])) {
	header("Location: ?views=buscarmov");
	exit;
}
include 'html/movimientos/pdf.php';
?>
