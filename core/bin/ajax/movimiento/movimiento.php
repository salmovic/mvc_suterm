<?php
if (!isset($_POST['token'])) {echo -1; exit;}
echo $movimientos->setSustituto();
?>
