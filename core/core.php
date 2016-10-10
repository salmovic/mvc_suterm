<?php
/*
NUCLEO DE LA APLICACION llamamos a todos los recursos de la aplicacion
*/

// Definizion de la zona horaria
date_default_timezone_set('America/Mexico_City');

/*
Constatnes de la conexion a la Base de datos
*/
define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','ocrendbb');

// ruta raiz
define('HTML_DIR','html/');
// Nombre de la aplicacion
define('APP_TITLE','SUTERM');
// Pie de pagina
define( 'FOOTER_COPY', 'Copy &copy; '.date( 'Y' ).' SUTERM' );
//url por defecto
define('APP_URL', 'http://localhost/mvc_suterm/');
//cargar todas las librerias... [vendor]
// require('vendor/autoload.php');
 ?>
