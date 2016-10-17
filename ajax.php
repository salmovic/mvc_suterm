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

		/*******************
		* RUTA CENTRO_TRABAJO *
		*******************/

		/*Create cen_trab*/
		case 'set_centrab':
		require('core/bin/ajax/centro_trabajo/centro_trabajo.php');
		break;
		/*Eliminar centro de trabajo*/
		case 'del_centrab':
		require('core/bin/ajax/centro_trabajo/del_centrab.php');
		break;
		/*refrescar tabala*/
		case 'refresh_centrab':
			require('core/bin/ajax/centro_trabajo/refresh_ct.php');
		break;
		/*cargar modal update*/
		case 'modalcentrab':
			require('html/centro_trabajo/update_ct.php');
		break;
		case 'updatecentrab':
		require('core/bin/ajax/centro_trabajo/centro_trabajo.php');
		break;

		/*******************
		* RUTA DEPARTAMENTO *
		*******************/
		case 'departamento':
		require('core/bin/ajax/departamento/departamento.php');
		break;
		/*Cargar modal update*/
		case 'modaldpto':
			require('html/departamentos/update_dep.php');
		break;
		case'deldepto':
			require('core/bin/ajax/departamento/deldepartamento.php');
		break;
		case 'refresh_depto':
		require('core/bin/ajax/departamento/refresh_depto.php');
		break;

    default:
      echo "ruta no especificada.";
    break;
  }
}else
{
	header('location: index.php');
}
 ?>
