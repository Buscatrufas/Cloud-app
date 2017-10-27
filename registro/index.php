<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Gestor de notas</title>
<meta charset="utf-8">
<link rel="stylesheet" href="/styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<?php include ($_SERVER ['DOCUMENT_ROOT'] . "/base/header.php"); ?>
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    <section id="slider" class="clear">
          <form action="adduser.php" method="post">
       <table>
          <tr>
           <td>User:</td>
           <td><input name="username" type="text" class="resizedTextbox"/></td>
          </tr>
          <tr>
           <td>Password:</td>
           <td><input name="password" type="password" /></td> 
          </tr>
          <tr>
           <td colspan="2"><input name="iniciar" type="submit" value="Registrarse"/></td>
          </tr>
          <tr>
          <?php
          if(isset($_SESSION['status_account'])){
             if($_SESSION['status_account']==="A"){
              echo '<td>Tipo de cuenta: </td>';
              echo '<td><input type="radio" name="acct" value="U" checked> Usuario </td>';
              echo '<td><input type="radio" name="acct" value="A"> Administrador </td>';
            }
          }
          ?>
          </tr>
      </table>
    </form>
    <!-- main content -->
    <div id="intro">
      <section class="clear">
        <!-- article 1 -->
      </section>
    </div>
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
    <!-- ########################################################################################## -->
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