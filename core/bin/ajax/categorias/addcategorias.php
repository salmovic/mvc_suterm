<?php
	if ($_POST['no_plaza']!='') {
		$cat = new Categorias();
		echo $cat -> setCategorias();
	}else
	echo 2;
?>
