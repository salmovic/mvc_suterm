<?php
if (!empty($_POST['idplaza'])) {
 $noplaza = trim($_POST['idplaza']);
 echo $plazas->deletePlazas($noplaza);
}else {
	echo "no";
}
?>
