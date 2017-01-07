<?php
if(isset($_FILES["foto"])){
	$file = $_FILES["foto"];
	$nombre = $file["name"];
	$tipo = $file["type"];
	$ruta_provisional = $file["tmp_name"];
	$size = $file["size"];
	if($size==0) {
		dystroy();
		echo "Debe seleccionar una imagen menor a 1.9 MB.";
		return;}
	$dimensiones = @getimagesize($ruta_provisional);
	$width = $dimensiones[0];
	$height = $dimensiones[1];
	$carpeta = "views/app/fotos/";
  if ($tipo != 'image/jpg' && $tipo != 'image/jpeg' && $tipo != 'image/png' && $tipo != 'image/gif') {
  	echo "Debe seleccionar una imagen valida.";
		dystroy();
		return;
  }
    $src = $carpeta.$nombre;
    if( move_uploaded_file($ruta_provisional, $src) ){
				$_SESSION['nom_foto'] = $nombre;
				echo 1;	 return;
		}
		echo "No se pudo cargar el archivo";
		dystroy();
}

function dystroy(){
	if(isset($_SESSION['nom_foto'])) unset($_SESSION['nom_foto']);
}

 ?>
