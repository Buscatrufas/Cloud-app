<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Summer Experience</title>
<meta charset="iso-8859-1">
<link rel="stylesheet" href="/styles/layout.css" type="text/css">
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<?php include ($_SERVER ['DOCUMENT_ROOT'] . "/base/header.php"); ?>
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
        <h1 align="center"><strong>NO TIENE NINGUN PEDIDO ACTUALMENTE!</strong></h1>
    <!-- main content -->
    <div id="intro">
      <section class="clear">
        <!-- article 1 -->
      </section>
    </div>
   <?php
    include($_SERVER ['DOCUMENT_ROOT'] . "/base/rss.php");
   ?>
       <!-- / content body -->
  </div>
</div>
<!-- Footer -->
<?php 
	include($_SERVER['DOCUMENT_ROOT']. "/base/footer.php")
?>
</body>
</html>