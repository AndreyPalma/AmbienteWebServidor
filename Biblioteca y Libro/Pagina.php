<?php
class Encabezado{
	public $sitio;
	function __construct($s){
		$this->sitio=$s;
	}
	function ToWeb(){
		$tit=$this->sitio;
		echo "<html><head><title>$tit</title></head>";
		echo "<body><h1>$tit</h1><div id='main>'>";
	}
}
class Pie{
	public $autor;
	function __construct($a){
		$this->autor=$a;
	}
	function ToWeb(){
		$a=$this->autor;
		echo "</div><hr>Autor: $a</body></html>";
	}
}
?>