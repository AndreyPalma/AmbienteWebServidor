<?php

class Fraccion{
	
	public $numerador;
    public $denominador;
    
	function __construct($numerador,$denominador){
		$this->numerador=$numerador;
		$this->denominador=$denominador;
	}
    
    function sumar($num,$den){
		$denComun = $this->denominador * $den;
		$numResultado = (($denComun/$this->denominador)*$this->numerador) + (($denComun/$den)*$num);
		echo "<b> La suma de $this->numerador/$this->denominador + $num/$den es: $numResultado/$denComun </b>";
	}
    
    function restar($num,$den){
		$denComun = $this->denominador * $den;
		$resultado = (($denComun/$this->denominador)*$this->numerador) - (($denComun/$den)*$num);
		echo "<b> La resta de $this->numerador/$this->denominador - $num/$den es: $resultado/$denComun </b>";
	}

    function dividir($num,$den){
		$numResultado = $this->denominador * $num;
		$denResultado = $this->numerador * $den;
		echo "<b> La division de $this->numerador/$this->denominador ÷ $num/$den es: $numResultado/$denResultado </b>";
	}
    
	function multiplicar($num,$den){
		$denResultado = $this->denominador * $den;
		$numResultado = $this->numerador * $num;
		echo "<b> La multiplicacion de $this->numerador/$this->denominador * $num/$den es: $numResultado/$denResultado </b>";
	}
	
}

?>











?>