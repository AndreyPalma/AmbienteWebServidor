<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title> Primera Clase </title>
	</head>
	<body>
		<h1> Mi Sitio </h1>
		<h2><?php echo date("Y-m-d H:i:s"); ?></h2>
		<p> AWS trata de cear sitios con apoyo de servidor pero sin meterle JAVA </p>
		<ul><!-- clase.php -->
			<li><a href="tiempo.html"> Tiempo Libre </a></li>
			<li><a href="vacaciones.html"> Vacaciones </a></li>
		</ul>
		<hr>
		<?php echo "<b>Diseño ".date("Y")."</b>"; ?>
	</body>
</html>