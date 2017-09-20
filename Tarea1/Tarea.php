<?php
	echo "<h2>Calculo</h2>";//CALCULO
$impuestoVenta=13;
$subtotal=100;
$montoPagar=200;
$total= $subtotal + $impuestoVenta;
$vuelto= $montoPagar - $total;
$totalFormat= number_format($total,2);
$vueltoFormat= number_format($vuelto,2);
	echo "<h4>Total: $totalFormat - Vuelto: $vueltoFormat</h4>";

	echo "<h2>Fibonacci</h2>";//FIBONACCI
$num1=0;
$num2=1;
$contador=0;
if(isset($_POST['num'])){
$numeroDado=$_POST['num'];
	while($contador<$numeroDado){
		$num3 = $num1 + $num2;
		$num1 = $num2;
		$num2 = $num3;
			echo $num3.", ";
		$contador++;
	}
}else{
	echo "<h4>Error, no se a encontrado un numero para la secuencia Fibonacci</h4>";
	echo "<br>";
}

	echo "<h2>Salario</h2>";//SALARIO
if(isset($_POST['sal'])){
$salarioXhora=$_POST['sal'];
$salarioBruto=$salarioXhora*160;
$ccss=$salarioBruto*0.09;
$salarioNeto=$salarioBruto-$ccss;
$brutoFormat= number_format($salarioBruto,2);
$netoFormat= number_format($salarioNeto,2);
$ccssFormat= number_format($ccss,2);
	echo "<h4>Salario bruto: $brutoFormat - Salario neto: $netoFormat - Deduccion CCSS: $ccssFormat</h4><br>";
	
}else{
	echo "<h4>No se han encontrado datos para calcular el salario</h4>";
	echo "<br>";
}

	echo "<h2>Circulo</h2>";//CIRCULO
if(isset($_POST['diam'])){
$diametro=$_POST['diam'];
$radio=$diametro/2;
$area=3.14*pow($radio,2);
$circunferencia=3.14*$diametro;
	echo "<h4>Area: $area - Circunferencia: $circunferencia</h4><br>";	
}else{
	echo "<h4>Error, no se encuentran datos</h4>";
	echo "<br>";
}

	echo "<h2>Correo</h2>";//CORREO
if(isset($_POST['correo'])){
$correo=$_POST['correo'];
$radio=$diametro/2;
$area=3.14*pow($radio,2);
$circunferencia=3.14*$diametro;
	echo "<h4>Area: $area - Circunferencia: $circunferencia</h4><br>";	
}else{
	echo "<h4>Error, no se encuentran datos</h4>";
	echo "<br>";
}

echo "<a href='Tarea.html'>Regresar</a>";
?>
