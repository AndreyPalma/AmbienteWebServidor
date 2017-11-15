<?php

class Banco{
	public $nombre
	public $cuenta;
	function __construct($nombre){
		$this->nombre=$c;
		$this->cuenta=[];
	}
	
	function agregarCuenta($cuenta){
		$this->cuenta[]=$cuenta;
	}
	function buscar($buscaCuenta){
		echo "<ul>";
		foreach($this->cuenta as $cuenta){
			if($buscaCuenta == $cuenta){
				echo "<li>Cuenta encontrada exitosamente</li>";
			}else{
				echo "<li>La cuenta digitada no se encuentra</li>";
			}
		}
		echo "</ul>";
	}
	
}



?>