<h1>Detalle de persona</h1>
<?php
$db=new mysqli("localhost","palma","12345","registrocivil");
if(isset($_GET['cedula'])){
	$ced=$_GET['cedula'];
	$consulta=$db->prepare("SELECT * FROM personas WHERE cedula=?");
	$consulta->bind_param("i",$ced);
	$consulta->execute();
	$filas=$consulta->get_result();
	$miFila=$filas->fetch_assoc();
	echo "<h2>".$miFila['nombre']." ".$miFila['apellido1']." ".$miFila['apellido2']."</h2>";
	echo "Cedula: ".$miFila['cedula']."<br>";
	echo "Fecha nacimiento: ".$miFila['fechanac']."<br>";
	echo "Estado civil: ".$miFila['estadocivil']."<br>";
	echo "Provincia: ".$miFila['provincia']."<br>";
	echo "Canton: ".$miFila['canton']."<br>";
	echo "Distrito: ".$miFila['distrito']."<br>";
	echo "<hr><a href='index.php'>Regresar</a></hr>"."<br>";
}

$db->close();

?>