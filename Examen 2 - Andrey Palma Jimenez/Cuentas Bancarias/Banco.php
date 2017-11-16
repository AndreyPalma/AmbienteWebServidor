<?php

class Banco{
	public $nombreBanco;
	public $cuentas;
	function __construct($nombreBanco){
		$this->nombreBanco=$nombreBanco;
		$this->cuentas=[];
	}
	
	function agregarCuenta($cuentas){
		$this->cuentas[]=$cuentas;
	}
	function buscar($buscaCuenta){
		$existe=false;
		foreach($this->cuentas as $cuenta){
			if($cuenta->cuenta == $buscaCuenta){
				echo "<b> La cuenta a nombre de $cuenta->cuenta si existe con un saldo de $cuenta->saldo colones </b>";
				$encuentra = true;
			}			
		}
		if($encuentra==false){
			echo "<b> La cuenta $buscaCuenta no existe </b>";
		}
	}
	
}



?>
