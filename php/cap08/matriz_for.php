<?php
$productos = array(1 => "manzanas","naranjas","peras","uvas");

$cuantos = count($productos); // La función count devuelve un número, el de la cantidad de celdas de la matriz que le proporcionamos dentro de sus paréntesis, $productos en este caso).

for ($i=1; $i<=$cuantos; $i=$i+1){

	print("<p>El producto ".$i." es: ". $productos[$i]."</p>");

}
?>