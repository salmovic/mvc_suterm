<?php


$mysql= 'mysql --user='.DB_USER.' --password='.DB_PASS.' -e "CREATE DATABASE"'.DB_NAME.'"';

$mysql2 = 'mysql --user='.DB_USER.' --password='.DB_PASS.' --database='.DB_NAME.' < "'.$_SESSION["backup"].'"';

system($mysql, $output);

system($mysql2, $output);

echo $output;
// header("Location: ?views=movimientos");
?>
