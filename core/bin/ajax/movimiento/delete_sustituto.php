<?php
if(isset($_POST['idsus'])){
$id = $_POST['idsus'];
echo $movimientos->deleteSustituto( $id );
}
 ?>
