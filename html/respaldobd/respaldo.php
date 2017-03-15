<?php
$fecha = date("Ymd-His");

$salida_sql = DB_NAME.'_'.$fecha.'.sql';

$dump="mysqldump -h".DB_HOST." -u".DB_USER." -p".DB_PASS." --opt ".DB_NAME." > $salida_sql";

system($dump, $output);

$zip = new ZipArchive();

$salida_zip = DB_NAME.'_'.$fecha.'.zip';
if($zip->open($salida_zip, ZIPARCHIVE::CREATE) == true ) {
	$zip->addFile($salida_sql);
	$zip->close();
	unlink($salida_sql);
	header("Location: $salida_zip");
}
else {
	echo "Error al convertir a un archivo .zip.";
}

?>
