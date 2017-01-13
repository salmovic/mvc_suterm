<?php
// Se encarga de manipular todas las peticiones Ajax
if($_POST){
	require('core/core.php');
	switch (isset($_GET['mode']) ? $_GET['mode'] : null)
	{
		/*RUTA PLAZA*/

		/*establecer*/
		case 'plaza':
		require('core/bin/ajax/plazas/plazas.php');
		break;
		/*Actualizar categoria*/
		case 'update_plaza':
		require('core/bin/ajax/plazas/plazas.php');
		break;
		/*cargar ventana modal categoria update*/
		case 'modal_plaza':
		require('html/plazas/modal_update.php');
		break;
		/*elimiar categoria*/
		case 'delete_plaza':
		require('core/bin/ajax/plazas/delplaza.php');
		break;
		/*actualizar tabala*/
		case 'refresh_plaza':
		require('core/bin/ajax/plazas/refresh_plaza.php');
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
		case 'upempleado':
		require('core/bin/ajax/empleado/updateemp.php');
		break;
		case 'deleteemp':
		require('core/bin/ajax/empleado/delete.php');
		break;
		/********************
		* RUTA MOVIMIENTOS  *
		********************/
		case 'modalmovimiento':
		require('html/movimientos/modalreemplazo.php');
		break;
		case 'busquedaemp':
		require('html/movimientos/infEmpSol.php');
		break;
		case 'tbmovimiento':
		require('html/movimientos/dttabla.php');
		break;
		case 'getcat_emp':
		require('html/movimientos/categoria.php');
		break;
		case 'movimiento':
		require('core/bin/ajax/movimiento/movimiento.php');
		break;
		case 'refresh_mov':
		require('core/bin/ajax/movimiento/refresh_tabla.php');
		break;
		case 'deletesustituto':
		require('core/bin/ajax/movimiento/delete_sustituto.php');
		break;
		// imprimirPDF
		case 'showpdf':
		require('core/bin/ajax/movimiento/showpdf.php');
		break;
		case 'delete_mov':
		require('core/bin/ajax/movimiento/delete_mov.php');
		break;
		case 'refresh_buscar':
		require('core/bin/ajax/movimiento/refresh_historial.php');
		break;
		/******************
		*   CATEGORIAS     *
		*******************/
		case 'categoria':
		require('core/bin/ajax/categorias/categorias.php');
		break;
		case 'modalcat':
		require('html/categorias/upcategorias.php');
		break;
		case 'refreshCat':
		require('core/bin/ajax/categorias/refresh.php');
		break;
		case 'deletecat':
		require('core/bin/ajax/categorias/delcategoria.php');
		break;
		/***************
		* USUARIOS     *
		****************/
		case 'usr':
		require('core/bin/ajax/usuarios/usuario.php');
		break;
		case 'dts_usr':
		require('html/usuarios/informacion.php');
		break;
		case 'modal_usr':
		require('html/usuarios/modal_update.php');
		break;
		case 'refresh_usr':
		 require('core/bin/ajax/usuarios/refresh_usr.php');
		break;
		case 'del_usr':
		require('core/bin/ajax/usuarios/delete.php');
		break;
		case 'foto_perfil':
		require('core/bin/ajax/usuarios/procesa_foto.php');
		break;
		/*********
		* LOGIN  *
		**********/
		case 'login':
		require('core/bin/ajax/login/login.php');
		break;
		case 'salir':
		require('core/bin/ajax/login/out.php');
		break;
		// modal foto
		case 'modal_foto':
		require('core/bin/ajax/login/foto_perfil.php');
		break;

		/**
		* Default
		*/
    default:
      echo "ruta no especificada.";
    break;
  }
}else
{
	echo "Error en la ruta!!!";
}
 ?>
