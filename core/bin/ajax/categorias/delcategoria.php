<?php
if ( isset($_POST['id']) )
{
	$id = $_POST['id'];
	echo $categoria->deleteCategorias( $id );
}else {
	echo 'Error: no se reconoce ningun id.';
}
?>
