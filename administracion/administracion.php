<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Summer Experience</title>
<meta charset="utf-8">
<link rel="stylesheet" href="/styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<?php include ($_SERVER ['DOCUMENT_ROOT'] . "/base/header.php"); ?>
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
</style>
  <div id="container" class="clear" >
    <!-- Slider -->
        <?php
          include($_SERVER ['DOCUMENT_ROOT'] . "/administracion/getAllUsers.php");
          echo "<table>";
          echo "<tr> <th>ID</th> <th>Name</th> <th>Password</th></tr></tr>";
          while($fila = mysql_fetch_array($query)){
              echo '<td>' . $fila['ID'] . '</td>';
              echo '<td>' . $fila['Name'] . '</td>';
              echo '<td>' . $fila['Password'] . '</td>';
              echo '<td><a href="edit.php?id=' . $fila['ID'] . '">Edit</a></td>';
              echo '<td><a href="delete.php?id=' . $fila['ID'] . '">Delete</a></td>';
              echo "</tr>"; 
          }
          echo "</table>"
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
<div class="wrapper row3">
  <footer id="footer" class="clear">
    <p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">Domain Name</a></p>
  </footer>
</div>
</body>
</html>