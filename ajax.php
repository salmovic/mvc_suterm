<?php
// Se encarga de manipular todas las peticiones Ajax
if($_POST){
	require('core/core.php');
	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
    case 'categoria':
      require('core/bin/ajax/categorias/addcategorias.php');
    break;
    case 'update_cat':
			require('core/bin/ajax/categorias/update_cat.php');
    break;
    case 'lostpass':
      require('core/bin/ajax/goLostpass.php');
    break;
    default:
      header('location: index.php');
    break;
  }

}else
{
	header('location: index.php');
}
 ?>
