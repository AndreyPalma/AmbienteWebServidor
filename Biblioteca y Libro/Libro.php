<?php /*plantilla.php*/

require("Pagina.php");
$Encabezado=new Encabezado("Libro: Prueba de Fuego");
$Pie=new Pie("James Dashner");
$Encabezado->ToWeb();

?>

<h2>Fecha de publicación original: 18 de septiembre de 2010</h2><br>
<h2>Géneros: Literatura juvenil, Ciencia ficción, Escenario apocalíptico</h2>
<?php $Pie->ToWeb(); ?>