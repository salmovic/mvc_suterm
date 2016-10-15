<?php
if( isset( $_POST['token'] ))
{
	switch ($_POST['token']) {
		/*SET CATEGORIAS*/
		case 'setcat':
		/*
		0,'{$_POST['no_plaza']}','{$_POST['categoria']}','{$_POST['plaza_actual']}','{$_POST['grupo_organico']}',
		'{$_POST['nivel_desempenio']}','{$_POST['nivel_remuneracion']}','{$_POST['grupo_nivel']}','{$_POST['plan_carrera']}')";
		*/
		if (!empty($_POST['no_plaza']))
		{
			echo $categoria -> setCategorias();
		}else{
			echo 2;
		}

		break;
		/*UPDATE CATEGORIAS*/
		case 'updatecat':
			echo $categoria -> updateCategorias();
		break;

		default:
			echo -1;
		break;
	}
}
?>
