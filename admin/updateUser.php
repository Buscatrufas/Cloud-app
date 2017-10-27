<?php
include($_SERVER ['DOCUMENT_ROOT'] . "/config/config.php");
$myusername = $_POST['name'];
$mypassword = $_POST['password'];
$myuid = $_POST['uid'];

$consulta = "UPDATE Users SET Name = '" . $myusername . "', Password = '" . $mypassword . "' WHERE ID = " . $myuid;
$query=mysql_query($consulta);

header('Location: '. "/admin/");

mysql_close($conn);
?>