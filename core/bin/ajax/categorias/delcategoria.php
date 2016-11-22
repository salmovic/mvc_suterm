<?php
if ( isset($_POST['id']) )
{
	$id = $_POST['id'];
	echo $categoria->deleteCategorias( $id );
}else {
	echo 'HOl';
}
?>
