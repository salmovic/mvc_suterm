<?php
/*
NUCLEO DE LA APLICACION llamamos a todos los recursos de la aplicacion
*/
session_start();
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
require('core/models/class.Plazas.php');
require('core/models/class.CentroTrabajo.php');
require('core/models/class.Departamentos.php');
require('core/models/class.Empleado.php');
require('core/models/class.Delegado.php');
require('core/models/class.Movimientos.php');
require('core/models/class.TipoPermiso.php');
require('core/models/class.Categorias.php');
require('core/models/class.Usuarios.php');
require('core/models/class.Login.php');
// funciones
require('core/bin/functions/functionConvert.php');
/*
Inicializando variables de clase global
*/
$plazas = new Plazas();
$centroTrabajo = new CentroTrabajo();
$departamento = new Departamentos();
$empleado = new Empleado();
$delegado = new Delegado();
$movimientos = new Movimientos();
$tipoPermiso = new TipoPermiso();
$categoria = new Categorias();
$usr = new Usuarios();
$login = new Login();
// Nuero de folio de movimiento
define('FOLIO',  $movimientos->getIdMaxMov());

?>
