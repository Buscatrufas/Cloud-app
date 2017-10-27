<?php
include($_SERVER ['DOCUMENT_ROOT'] . "/config/config.php");

if (isset($_SESSION['login_user']) == null) {
    session_start();
}
if($_SESSION['status_account']=="A"){
	$consulta ="DELETE FROM Users WHERE ID ='" . $_GET["id"] . "'";
	$query = mysql_query($consulta);
	header('Location: '. "administracion.php");
}else{
	header('Location: '. "administracion.php");
}
?>