<?php
$archivo = "fotos.txt";
$fotos = file($archivo);
shuffle($fotos);

echo '<img src="fotos/'.$fotos[0].'" width="280" height="200">';
?>