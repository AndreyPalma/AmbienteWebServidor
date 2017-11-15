<?php
class Bibliteca {
	public $libro;

	function __construct($libro){
		$this->libro=[];
	}
	
	function mostrarDatos(){
		$cantidad=count($this->cursos);
		return "<b> $this->cedula </b> $this->nombre ($cantidad cursos)";
	}
	function agregarLibro($libro){
		$this->libro[]=$libro;
	}

}
?>