<?php

class Contador {
	
	public $valor;
	
	function __construct($valor){
        $this->valor=$valor;
	}
	
    function iniciar($num){
        $this->valor=$num;
		return "<b> Inicio: $this->valor </b> ";
	}
	function incrementar(){
        $incremento=$this->valor;
        $incremento++;
        $this->valor=$incremento;
		return "<b> Incremento:  $incremento";
	}
	function decrementar(){
        $decremento=$this->valor;
        $decremento--;
        $this->valor=$decremento;
		return "<b> Decremento: $decremento ";
	}
	
	
}



?>