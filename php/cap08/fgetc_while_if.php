<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Fgetc en un bucle</title>
</head>
<body>
<p>
<?php
$abierto = fopen ("archivo1.txt", "r");
$cadena = "";
while ( false !== ($caracter = fgetc($abierto)) ){

	if ($caracter!="z"){
		
		$cadena = $cadena . $caracter;
		// Vamos concatenando cada caracter, uno por vuelta.
	} else {
	
		break;
		// Si es “z”, salimos del bucle.
	}
}
fclose ($abierto);

print ($cadena);// Muestra hasta la "z" o hasta el final si no hubo ninguna "z".
?>
</p>
</body>
</html>