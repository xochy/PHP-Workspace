<?php
$identificador = fopen ("pagina.html", "r");

while(!feof($identificador)){

	$linea = fgetss($identificador, 1024);
	echo $linea."<br>";
	
}

fclose($identificador);
?>