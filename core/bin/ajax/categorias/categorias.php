<?php
	if (isset($_POST['token'])){
		 switch ( $_POST['token'] )
		 {
		 	case 'setcategoria':
				if(!validacion()) return;
		 		$exito=$categoria->setCategorias();
				if($exito!=1){
					echo "No se pudo guardar la categoria.";
					return;
				}
				echo $exito;
		 		break;
				case 'upcategoria':
					$exito=$categoria->updateCategorias();
					if($exito!=1){
						echo "No se pudo actualizar la categoria.";
						return;
					}
					echo $exito;
			 		break;
		 	default:
				echo "Error de rita.";
		 		break;
		 }
	}
	function validacion() {
		if($_POST['rpe_empleado']==-1){
			echo "Debe seleccionar un emplado.";
			return false;
		}
		if($_POST['no_plaza']==-1){
			echo "Debe seleccionar una Plaza.";
			return false;
		}
		return true;
	}
?>
