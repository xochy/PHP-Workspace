<?php
$archivo = "frases.txt";// La ruta al archivo

$frases = file($archivo);
// A $lineas lo convertimos en una matriz con tantas celdas como líneas -renglones- tenía el archivo de texto.

shuffle($frases); // Mezclamos el contenido de esa matriz con la función shuffle, por lo cual, no sabemos cuál frase quedó en el primer lugar, y la mostramos:

echo ("<p>Nuestra frase del día es ".$frases[0]."</p>");
?>