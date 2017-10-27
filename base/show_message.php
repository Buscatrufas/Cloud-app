<?php
ini_set ( 'display_errors', "on" );
if (isset ( $_GET ["error"] )) {
	echo '<br/><font color="red">' . $_GET ["error"] . '</font>';
	// coregida: echo '<font color="red">'. htmlspecialchars($_GET["error"]) . '</font>';
}
if (isset ( $_GET ["success"] )) {
	echo '<br/><font color="green">' . $_GET ["success"] . '</font>';
	// coregida: echo '<font color="green">'. htmlspecialchars($_GET["error"]) . '</font>';
}
?>