<?php
if (! isset ( $_SESSION ))
	session_start ();
if (isset ( $_SESSION ['login_user'] )) {
	echo '<p class="login">' . "Hola " . $_SESSION ['login_user'] . " - " . '<a style="background-color: #86bc25;
    border: medium none;
    color: #ffffff;
    cursor: pointer;
    display: block;
    float: right;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
	margin: 0;
    padding: 5px;
    width: 70px;" href="/login/logout.php">Salir</a>' . '</p>';
} else {
	include ($_SERVER ['DOCUMENT_ROOT'] . "/login/login.php");
}
?>

