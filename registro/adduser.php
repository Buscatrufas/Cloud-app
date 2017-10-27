<?php
include($_SERVER ['DOCUMENT_ROOT'] . "/config/config.php");

$myusername = $_POST['username'];
$mypassword = $_POST['password'];
if(!empty($_POST['acct']))
	$status = $_POST['acct'];

if(empty($status)){
	$consulta = "INSERT INTO Users(Name, Password, account_type) VALUES('". $myusername . "', '" . $mypassword . "','U')";
}else{
	$consulta = "INSERT INTO Users(Name, Password, account_type) VALUES('". $myusername . "', '" . $mypassword. "', '" .  $status ."')";
}

if(mysql_query($consulta) === true){
	header('Location: '. "/registro/index.php?success=Registrado con éxito!");
}else{
	header('Location: '. "/registro/index.php?error=usuario ya existente!");
}
?>