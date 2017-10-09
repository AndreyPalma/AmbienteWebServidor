<fieldset>
<legend> <h2>Insertar dato</h2> </legend>
	<form action="crear.php"method="POST">
		Cedula: <input type="text" name="ced"><br><br>
		Nombre: <input type="text" name="nom"><br><br>
		Primer Apellido: <input type="text" name="ape1"><br><br>
		Segundo Apellido: <input type="text" name="ape2"><br><br>
		Fecha de nacimiento (AAAA-MM-DD): <input type="text" name="nac"><br><br>
		Estado civil: <input type="text" name="est"><br><br>
		Provincia: <input type="text" name="pro"><br><br>
		Canton: <input type="text" name="can"><br><br>
		Distrito: <input type="text" name="dis"><br><br>
		<button type="submit">Crear</button>
	</form>
</fieldset>
<?php /* crear.php */
$db=new mysqli("localhost","palma","12345","registrocivil");

if(isset($_POST['ced'])){
	$nomb=$_POST['nom'];
	$cedu=$_POST['ced'];
	$apel1=$_POST['ape1'];
	$apel2=$_POST['ape2'];
	$fecha=$_POST['nac'];
	$estad=$_POST['est'];
	$prov=$_POST['pro'];
	$cant=$_POST['can'];
	$dist=$_POST['dis'];
	$consulta=$db->prepare("INSERT INTO personas(cedula, nombre, apellido1, apellido2, fechanac, estadocivil, provincia, canton, distrito) VALUES (?,?,?,?,?,?,?,?,?)");
	$consulta->bind_param("sssssssss", $cedu, $nomb, $apel2, $apel2, $fecha, $estad, $prov, $cant, $dist);
	$consulta->execute();
	if($consulta->affected_rows>0){
		echo "<h2>Insercion exitosa</h2>";
		echo "<a href='index.php'>Regresar</a>";
	} else {
		echo "<h2>Fallo al insertar</h2>";
		echo "<a href='index.php'>Regresar</a>";
	}
}
$db->close();
?>

