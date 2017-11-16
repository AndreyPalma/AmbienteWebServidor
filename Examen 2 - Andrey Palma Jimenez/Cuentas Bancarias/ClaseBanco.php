<?php

require("Banco.php");
require("Cuenta.php");
$Andrey= new Cuenta("7-0262-0607",10000);
$Marco= new Cuenta("1-1015-0999",10000);
$Banco=new Banco("BCR");
$Banco->agregarCuenta($Andrey);
$Banco->agregarCuenta($Marco);
echo $Marco->mostrarDatos()."<br>";
echo $Andrey->mostrarDatos()."<br>";
echo $Andrey->depositar(5000)."<br>";
echo $Andrey->mostrarDatos()."<br>";
echo $Andrey->retirar(2500)."<br>";
echo $Andrey->mostrarDatos()."<br>";
echo $Andrey->transferir($Marco,10000)."<br>";
echo $Andrey->mostrarDatos()."<br>";
echo $Marco->mostrarDatos()."<br>";
$Banco->buscar("7-0262-0607")."<br>";

?>