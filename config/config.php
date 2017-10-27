<?php
/****************************************
**establecemos conexion con el servidor.
**nombre del servidor: localhost.
**Nombre de usuario: root.
**Contraseña de usuario: root.
**Si la conexion fallara mandamos un msj 'ha fallado la conexion'**/
ini_set ( 'display_errors', "on" );

if(!defined("LOAD_DATA")){
	define('DB_SERVER', "localhost");	
	define('DB_USERNAME', "usuario");
	define('DB_PASSWORD', "usuario");
	define('DB_DATABASE', "cloudapps");
	define("LOAD_DATA", TRUE);
}

	$conn = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD) or die('No se pudo conectar: ' . mysql_error());
	mysql_select_db(DB_DATABASE,$conn);

?>
