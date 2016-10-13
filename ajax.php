<?php
// Se encarga de manipular todas las peticiones Ajax
if($_POST){
	require('core/core.php');
	switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
		/*Categoria*/
    case 'categoria':
      require('core/bin/ajax/categorias/addcategorias.php');
    break;
    case 'mod_update_cat':
			require('html/categorias/modal_update.php');
    break;
		case 'delete_cat':
			require('core/bin/ajax/categorias/delcategorias.php');
    break;
		case 'refresh_cat':
			require('html/categorias/refresh_categoria.php');
    break;
		/* end Categoria*/
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
