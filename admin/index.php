<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Gestor de notas</title>
<meta charset="utf-8">
<link rel="stylesheet" href="/styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<?php include ($_SERVER ['DOCUMENT_ROOT'] . "/base/header.php"); 
if (isset($_SESSION['login_user']) == null) {
    session_start();
}
?>
<div class="wrapper row2">
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
	background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
    padding: 8px;    
	background: #e8edff;     
	border-bottom: 1px solid #fff;    
	color: #669;    
	border-top: 1px solid transparent;
}

</style>
  <div id="container" class="clear" >
    <!-- Slider -->
        <?php
        if(isset($_SESSION['login_user'])){
          include($_SERVER ['DOCUMENT_ROOT'] . "/admin/getAllUsers.php");
          echo '<table id="table">';
          echo "<tr> <th>ID</th> <th>Name</th> <th>Password</th></tr></tr>";
          while($fila = mysql_fetch_array($query)){
              echo '<td id="id_table">' . $fila['ID'] . '</td>';
              echo '<td>' . $fila['Name'] . '</td>';
              echo '<td>' . $fila['Password'] . '</td>';
              echo '<td><a href="/admin/edit.php?id=' . $fila['ID'] . '">Editar</a></td>';
              echo '<td><a href="/admin/delete.php?id=' . $fila['ID'] . '">Borrar</a></td>';
              echo "</tr>"; 
          }
          echo "</table>";
		}else{
			header('Location: '. "/index.php");
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
</body>
</html>

<script type = "text/javascript">
/*var WRITEABLE = false;
var id = 0;
function editable(id){
	var ediTable = document.getElementById('table');
	for(var i=0; i<table.rows.length; i++){
		var id_getTable = table.rows[i].cells[0].innerText;
		if(id==id_getTable){
			
		}
	}
}*/

</script>