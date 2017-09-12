<meta charset="UTF-8"/>
<?php /* variables.php */
	echo "<h1>Variables</h1>";
	$nombre="Ricardo";
	$edad=24;
	echo "<h3>Me llamo $nombre y tengo $edad años</h3>";
	echo "<h2>Si uso comilla simple, no se leen variables</h2>";
	echo '<h3>Me llamo $nombre y tengo $edad años</h3>';
	
	$edadMeses=$edad*12;
	echo "<p>Edad en meses: $edadMeses</p>";
?>