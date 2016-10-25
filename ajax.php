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

		/*****************
		* RUTA DELEGADOS *
		*****************/

		case 'delegado':
			require('core/bin/ajax/delegado/delegado.php');
		break;
		case 'modaldeleg':
		  require('html/delegados/updelegado.php');
		break;
		case 'deldeleg':
			require('core/bin/ajax/delegado/deldelegado.php');
		break;
		case 'refresh_deleg':
			require('core/bin/ajax/delegado/refresh.php');
		break;

		/*****************
		* RUTA EMPEADOS  *
		*****************/
		case 'empleado':
			 require('core/bin/ajax/empleado/empleado.php');
		break;
    default:
      echo "ruta no especificada.";
    break;
		/********************
		* RUTA MOVIMIENTOS  *
		********************/
		case 'modalmovimiento':
		require('html/movimientos/modalreemplazo.php');
		break;
		case 'busquedaemp':
		require('html/movimientos/informacion.php');
		break;
		case 'tbmovimiento':
		require('html/movimientos/dttabla.php');
		break;
  }
}else
{
	header('location: index.php');
}
 ?>
