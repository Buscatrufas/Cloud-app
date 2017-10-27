<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title>Gestor de notas</title>
<meta charset="utf-8">
<link rel="stylesheet" href="/styles/layout.css" type="text/css">
<style type="text/css">
#sec {
height:350px;
width:900px;
}

#sec_text {
height:270px;
padding: 40px;
width:420px;
background-color:#333333;
float:left;
}

#sec_text h1{
font-size:2.3em;
color: #86bc25;
}

#sec_text p {
font-size:1.2em;
}

#sec_text p span{
font-weight: bold;
color : #ffffff;
font-size:1.4em;
}

#sec_pic{
height:350px;
width:400px;
background-color:black;
float:right;
}

#sec_pic img{
height:350px;
width:400px
}
?>
</style>
<!--[if lt IE 9]><script src="scripts/html5shiv.js"></script><![endif]-->
</head>
<body>
<?php include ($_SERVER ['DOCUMENT_ROOT'] . "/base/header.php"); ?>
<div class="wrapper row2">
  <div id="container" class="clear">
    <!-- Slider -->
    <?php
      if (isset($_GET["section"]) AND ($_GET["section"]=="h")){
        echo '<p><h1><strong>ROPA HOMBRE</strong></h1></p>';
      }else if (isset($_GET["section"]) AND ($_GET["section"]=="m")){
        echo '<p><h1><strong>ROPA MUJER</strong></h1></p>';
      }else{
        header('Location: '. "index.php");
      }
      ?>
      <br>
      <section id="slider" class="clear">
      <?php
          include ($_SERVER ['DOCUMENT_ROOT'] . "/secciones/carga_ropa.php");
          while($fila = mysql_fetch_array($ropa)){
          	if($_GET['section']==$fila['Tipo']){
            echo '<div id="sec">';
            echo '<div id="sec_text">';
              echo '<h1>'. $fila['Nombre'].'</h1>';
				echo '<p><span>Descripción: </span>' . $fila['Descripcion'] . '</p>';
				echo '<br>';
				echo '<p><span>Precio: </span>' . $fila['Precio'] . '€</p>';
             echo '</div>';
              echo '<div id="sec_pic">';
              echo '<img src="' . $fila['rutaIMG'] . '"/>';
             echo '</div>';
            echo '</div>';
            echo '<div style="float:none"></div>';
            echo '<br />';
          	}
          }
        ?>
    </section>
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