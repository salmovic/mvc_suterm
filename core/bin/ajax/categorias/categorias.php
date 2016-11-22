<?php
	if (isset($_POST['token'])){
		 switch ( $_POST['token'] )
		 {
		 	case 'setcategoria':
		 		echo $categoria->setCategorias();
		 		break;
				case 'upcategoria':
					echo $categoria->updateCategorias();
			 		break;
		 	default:
				echo "El token ".$_POST['token']." No es valido";
		 		break;
		 }
	}
?>
