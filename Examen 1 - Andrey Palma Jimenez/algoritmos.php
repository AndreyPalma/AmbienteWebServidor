<?php
	echo "<h2>Calculo Venta</h2>";
$subtotal=$_POST['subtotal'];
$impuestoVenta=1000;
$total= $subtotal + $impuestoVenta;
if($total>20000){
	$descuento=$total*0.10;
	$totalDescuento=$total-$descuento;
	echo "<h4>Subtotal: $subtotal <br>
		Impuesto: $impuestoVenta <br>
		Descuento: $descuento <br>
		Total: $totalDescuento <br>
		</h4>";
} else {
	echo "<h4>Subtotal: $subtotal <br>
		Impuesto: $impuestoVenta <br>
		Total: $total <br>
		</h4>";
}

?>