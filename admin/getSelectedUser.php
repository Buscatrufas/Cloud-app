<?php
include($_SERVER ['DOCUMENT_ROOT'] . "/config/config.php");

$consulta="SELECT * from Users WHERE id = ". $_GET ["id"] ;

$query=mysql_query($consulta);

$usuario = mysql_fetch_row($query);

mysql_close($conn);
?>