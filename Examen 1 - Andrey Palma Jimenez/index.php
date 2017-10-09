<?php /* index.php */

echo "<h1>Registro Civil</h1>";
/*$db=new mysqli("localhost","nombre","clave","nombre base de datos");*/
$db=new mysqli("localhost","palma","12345","registrocivil");

$sql="SELECT * FROM personas"; // WHERE filtro
$consulta=$db->query($sql);
if($consulta===FALSE){
	echo "<h2>Error.".$db->error."</h2>";
}

//recorremos el conjunto de filas
while($fila=$consulta->fetch_assoc()){
	$link="detalles.php?cedula=".$fila['cedula'];
	$nombre=$fila['nombre']." ".$fila['apellido1']." ".$fila['apellido2'];
	echo "<a href='$link'>$nombre</a><br>";
	/*echo "Nombre: ".$fila['nombre']. " -- Cedula: ".$fila['cedula']."<br>";*/
}
$db->close();
?>

<br>
<form action="crear.php"method="POST">
	<button type="submit">Crear</button>
</form>