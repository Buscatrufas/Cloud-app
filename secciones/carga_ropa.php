<?php
include($_SERVER ['DOCUMENT_ROOT'] . "/config/config.php");
if(!isset($_SESSION)){ session_start(); }

$consulta="SELECT * FROM Ropa";
$ropa=mysql_query($consulta);

mysql_close($conn);

?>