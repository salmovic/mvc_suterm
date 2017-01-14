<?php
/**
* Verificar si se esta recibiendo un token, un token es una operacion de peticion del usuario.
*/
	if (isset($_POST['token'])){
		// Evalúa que tipo de operacion es la que requiere se procesada.
		 switch ( $_POST['token'] ) {
			 // Operación Guardar categoria.
		 	case 'setcategoria':
				//Validando la información enviada por el usuario.
				if(!validacion()) return;
				//Guarda la informacion a la bd
		 		$exito=$categoria->setCategorias();
				if($exito!=1){
					echo "No se pudo guardar la categoria.";
					return;
				}
				//Regresa un valor 1 en caso de que se halla guardado con exito.
				echo $exito;
		 		break;
				// Operación Actualizar categoria.
				case 'upcategoria':
				//Validando la información enviada por el usuario.
				if(!validacion()) return;
				//Guarda la informacion a la bd
					$exito=$categoria->updateCategorias();
					if($exito!=1){
						echo "No se pudo actualizar la categoria.";
						return;
					}

					echo $exito;
			 		break;
		 	default:
				echo "Error de ruta.";
		 		break;
		 }
	}
	// Validacion de los campos de seleccion.
	function validacion() {
		//Validar rpe_empleado
		if($_POST['rpe_empleado']==-1){
			echo "Debe seleccionar un emplado.";
			return false;
		}
		//Validar no_plaza
		if($_POST['no_plaza']==-1){
			echo "Debe seleccionar una Plaza.";
			return false;
		}
		return true;
	}
?>
