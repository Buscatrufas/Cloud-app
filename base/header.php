<div class="wrapper row1">
	<header id="header" class="clear">
		<div id="hgroup"></div>
		<div style="width: 100%">
			<div style="float: left; width: 45%;">
				<h1>
					<a href="/index.php"><font size=72px>Gestor de notas</font></a>
				</h1>
			</div>
			<div style="float: right; width: 45%;">
         		<?php include ($_SERVER ['DOCUMENT_ROOT'] . "/login/session.php"); ?>
    			</div>
			<div style="float: none"></div>
		</div>
		<nav>
			<ul>
      <?php
						if (isset ( $_SESSION ['login_user'] )) {
							if ($_SESSION ['status_account'] == "A") {
								echo '<li><a href="/admin/index.php">Administracion</a></li>';
								echo '<li><a href="/secciones/pedidos.php">Pedidos</a></li>';
							} else {
								/*echo '<li><a href="/secciones/section.php?section=' . "h" . '">Hombres</a></li>';
								echo '<li><a href="/secciones/section.php?section=' . "m" . '">Mujeres</a></li>';
								echo '<li><a href="pedidos.php">Pedidos</a></li>';*/
							}
						} else {
							echo '<li><a href="/registro/index.php">Registrate</a></li>';
						}
						?>
        
    <!--<form action="#" method="post" class="search_bar">
					<fieldset>
						<legend>Search:</legend>
						<input type="text" value="Busca dentro de nuestra web&hellip;"
							onFocus="this.value=(this.value=='Busca dentro de nuestra web&hellip;')? '' : this.value ;">
						<input type="submit" id="sf_submit" value="Buscar">
					</fieldset>
				</form>-->
			</ul>
		</nav>
			<?php 	include ($_SERVER ['DOCUMENT_ROOT'] . "/base/show_message.php"); ?>
		</header>
</div>