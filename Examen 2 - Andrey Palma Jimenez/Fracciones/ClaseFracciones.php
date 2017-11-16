<?php

require("Fraccion.php");
$Fraccion = new Fraccion(2,5);
echo $Fraccion->sumar(5,2)."<br>";
echo $Fraccion->restar(10,3)."<br>";
echo $Fraccion->multiplicar(5,4)."<br>";
echo $Fraccion->dividir(7,5)."<br>";

?>