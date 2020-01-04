<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Noticia</title>
</head>
<body>
<p>
<?php
// Abrimos el archivo.
$abierto = fopen ("noticia.txt", "r");
// Inicializamos una variable.
$cadena = "";
// Mientras NO sea el final del archivo abierto:

while (!feof ($abierto)){
	// leemos un carácter nuevo.
	$nuevo = fgetc ($abierto);
	// Concatenamos ese carácter nuevo a lo anterior.
	$cadena = $cadena.$nuevo;
}
fclose ($abierto); // Cerramos el archivo.
print ($cadena); // Mostramos todo lo leído.
?>
</p>
</body>
</html>