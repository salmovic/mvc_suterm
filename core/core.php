<?php
/*
NUCLEO DE LA APLICACION llamamos a todos los recursos de la aplicacion
*/

/*
*Define la zona horaria
*/
date_default_timezone_set('America/Mexico_City');

/*
CONSTANTES DE LA BASE DE DATOS
*/

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','suterm');

/*
 CONSTANTES DE LA VISTA
*/
define('HTML_DIR','html/');
define('APP_TITLE','SUTERM');
define( 'FOOTER_COPY', 'Copy &copy; '.date( 'Y' ).' SUTERM' );
define('APP_URL', 'http://localhost/mvc_suterm/');

/*
Estrcuctura requerida
*/
require_once('core/models/class.Connection.php');
require('core/models/class.Categorias.php');

/*
Inicializando variables de clase global
*/
$categoria = new Categorias();
?>
