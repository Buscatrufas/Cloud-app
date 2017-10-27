<?php 
include($_SERVER ['DOCUMENT_ROOT'] . "/config/config.php");
if (isset($_SESSION['login_user']) == null) {
    session_start();
}
ini_set ( 'display_errors', "on" );
		//$myusername=mysqli_real_escape_string($conn,$_POST['username']);
		//$mypassword=mysqli_real_escape_string($conn,$_POST['password']);
		$myusername = $_POST['username'];
		$mypassword = $_POST['password'];
		$consulta = "SELECT id, account_type FROM Users WHERE Name='$myusername' AND password='$mypassword'";

		$resultado = mysql_query($consulta);
		$row = mysql_fetch_assoc($resultado);
		$rows= mysql_num_rows($resultado);
		// If result matched $myusername and $mypassword, table row must be 1 row
		if($rows>=1){
			$_SESSION['login_user']=$myusername;
			$_SESSION['identify']=$row['id'];
			$_SESSION['status_account']=$row['account_type'];
			header('Location: '. "/index.php");
		}else{
			header('Location: '. "/index.php?error=" . "Credenciales inválidas");
		}
	mysql_close($conn); // Closing Connection
?>