<?php
$archivo = "datos.txt";// La ruta al archivo

$lineas = file($archivo);
// A $lineas lo convertimos en una matriz con tantas celdas como líneas -renglones- tenía el archivo de texto.

// Ahora, vamos a recorrer esa matriz con un bucle:
for ($i=0; $i<count($lineas); $i++) {

	print ("<p>La línea ".($i+1)." contiene: ".$lineas[$i]."</p>");

}
?>