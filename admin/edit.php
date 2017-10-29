<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Gestor de notas</title>
<meta charset="utf-8">
<link rel="stylesheet" href="/styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<style type="text/css">
#container table { 
font-family: 'Lucida Sans Unicode', 'Lucida Grande', Sans-Serif;    
font-size: 12px;    
margin: 45px;     
width: 480px; 
text-align: left;    
border-collapse: collapse; }
#container table th {     
font-size: 13px;     
font-weight: normal;     
padding: 8px;     
background: #b9c9fe;    
border-top: 4px solid #aabcfe;    
border-bottom: 1px solid #fff; 
color: #039; }
#container table td {    
padding: 8px;    
background: #e8edff;     
border-bottom: 1px solid #fff;    
color: #669;    
border-top: 1px solid transparent; }
#container table tr:hover td { 
background: #d0dafd; 
color: #339; }
#container table td button{
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
    padding: 8px; 
	border-bottom: 1px solid #fff;    
	color: #669;    
	border-top: 1px solid transparent;
}
.accept{
	background: #7FFF00; 
}

.cancel{
	background: #DC143C; 
}

</style>
<?php include ($_SERVER ['DOCUMENT_ROOT'] . "/base/header.php"); 
if (isset($_SESSION['login_user']) == null || $_SESSION['status_account']!='A') {
    header('Location: '. "/index.php");
}
?>
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
        <?php 
        	include ($_SERVER ['DOCUMENT_ROOT'] . "/admin/getSelectedUser.php");
        	$rows= mysql_num_rows($query);
        	if($rows>=1){
        		echo '<form action="\admin\updateUser.php" method="post">';
        		echo '<table id="table">';
        		echo '<tr> <th>ID</th> <th>Name</th> <th>Password</th></tr></tr>';
        		echo '<td id="id_table" name="uid">' . $usuario[0] . '</td>';
        		echo '<td><input type="text" name="name" value="' . $usuario[1] . '"></td>';
        		echo '<td><input type="text" name="password" value="' . $usuario[2] . '"></td>';
        		echo '<td><button type="submit" class="accept">Aceptar</button></td>';
        		echo '<td><button type="button" class="cancel" onclick="returnMenu()">Cancelar</button></td>';
        		echo '</table>';
        		echo '<input type="hidden" name="uid" value="' . $usuario[0] . '" />;';
        		echo '</form>';
        	}
        ?>
    <!-- main content -->
    <div id="intro">
      <section class="clear">
        <!-- article 1 -->
      </section>
    </div>
       <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<?php 
	include($_SERVER['DOCUMENT_ROOT']. "/base/footer.php")
?>
<script type = "text/javascript">
	function returnMenu(){
		window.location.href="/admin/";
	}
</script>
</body>
</html>