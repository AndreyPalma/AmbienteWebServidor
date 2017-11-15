<?php

class Contador {
	
	public $valor;
	
	function __construct($valor){		
	}
	
	function incrementar($num){
		$incremento= $valor+$num;
		return "<b> Incremento: $incremento </b> ";
	}
	function decrementar($num){
		$incremento= $valor-$num;
		return "<b> Decremento: $decremento </b> ";
	}
	
	function iniciar($valor){
		$this->valor=$inicio;
		return "<b> Inicio: $inicio </b> ";
	}
}



?>