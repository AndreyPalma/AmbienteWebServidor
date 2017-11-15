<?php

class Cuenta {
	public $saldo;
	public $cuenta;
	
	function __construct($saldo, $cuenta){
		$this->monto=$monto;
		$this->cuenta=$cuenta;
	}
	
	function depositar($monto){
		$deposito = $saldo+$monto;
		return "<b> Se han depositado $deposito a la cuenta $this->cuenta </b> ";
	}
	
	function retirar($monto){
		$retiro = $saldo-$monto;
		return "<b> Se han retirado $retiro a la cuenta $this->cuenta </b> ";
	}
	
	function transferir($cuenta, $monto){
		
	}
	
	
}


?>