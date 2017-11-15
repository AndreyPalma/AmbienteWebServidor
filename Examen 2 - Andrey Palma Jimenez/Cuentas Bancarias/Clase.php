<?php
require("Banco.php");
require("Cuenta.php");
$Banco= new Banco("Banco Nacional")
$Andrey= new Cuenta("7-0262-0607",10000);
$Marco= new Cuenta("7-0262-0607",10000);
$Andrey->depositar(5000);
$Andrey->retirar(2500);

?>