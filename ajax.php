<?php
// Se encarga de manipular todas las peticiones Ajax
if($_POST){
	require('core/core.php');
	switch (isset($_GET['mode']) ? $_GET['mode'] : null)
	{
		/*RUTA CATEGORIAS*/

		/*establecer*/
    case 'categoria':
      require('core/bin/ajax/categorias/categorias.php');
    break;
		/*Actualizar categoria*/
		case 'update_cat':
			require('core/bin/ajax/categorias/categorias.php');
    break;
		/*cargar ventana modal categoria update*/
    case 'mod_update_cat':
			require('html/categorias/modal_update.php');
    break;
		/*elimiar categoria*/
		case 'delete_cat':
			require('core/bin/ajax/categorias/delcategorias.php');
    break;
		/*actualizar tabala*/
		case 'refresh_cat':
			require('core/bin/ajax/categorias/refresh_categoria.php');
    break;
		/*************
		*  *
		*************/

    default:
      header('location: index.php');
    break;
  }
}else
{
	header('location: index.php');
}
 ?>
