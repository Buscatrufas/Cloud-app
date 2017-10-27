<?php
include($_SERVER ['DOCUMENT_ROOT'] . "/config/config.php");

$consulta="SELECT * from Users";
$query=mysql_query($consulta);

mysql_close($conn);
?>