<?php

class Cuenta {
	public $cuenta;
    public $saldo;
	
	function __construct($cuenta, $saldo){
		$this->saldo=$saldo;
		$this->cuenta=$cuenta;
	}
    
    function mostrarDatos(){
		return "<b>Cuenta: $this->cuenta Saldo: $this->saldo colones</b>";
	}
	
	function depositar($monto){
        $saldo=$this->saldo;
        $deposito=$saldo+$monto;
        $this->saldo=$deposito;
		return "<b> Se han depositado $monto colones a la cuenta $this->cuenta </b> ";
	}
	
	function retirar($monto){
		$saldo=$this->saldo;
        $deposito=$saldo-$monto;
        $this->saldo=$deposito;
		return "<b> Se han retirado $monto colones a de la cuenta $this->cuenta </b> ";
	}
	
	function transferir($cuenta, $monto){
        $cuenta->depositar($monto);
		$this->retirar($monto);
		echo "<b> Se han transferido $monto colones a la cuenta $cuenta->cuenta desde la cuenta $this->cuenta </b>";
	}
	
}


?>