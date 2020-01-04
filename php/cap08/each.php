<?php
$datos["nombre"] = "Juan Pérez";
$datos["edad"] = 24;
$datos["estado"] = "casado";
$datos["sueldo"] = 800;

$este = each($datos);
/* Convierte a $este en una matriz de 4 celdas
Para visualizarlo, imprimiremos las 4 celdas de $este: */

print("El índice de este elemento es ".$este[0]."<br>");
print("El valor de este elemento es ".$este[1]."<br>");
print("El índice de este elemento es ".$este["key"]."<br>");
print("El valor de este elemento es ".$este["value"]."<br>");
?>