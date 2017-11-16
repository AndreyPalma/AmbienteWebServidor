<?php
require("Contador.php");
$valor=new Contador(0);
echo $valor->iniciar(25)."<br>";
echo $valor->decrementar()."<br>";
echo $valor->incrementar()."<br>";
echo $valor->iniciar(100)."<br>";
echo $valor->incrementar()."<br>";
echo $valor->incrementar()."<br>";
echo $valor->incrementar()."<br>";
echo $valor->incrementar()."<br>";
echo $valor->iniciar(50)."<br>";
echo $valor->decrementar()."<br>";
echo $valor->decrementar()."<br>";
echo $valor->decrementar()."<br>";
echo $valor->incrementar()."<br>";
?>