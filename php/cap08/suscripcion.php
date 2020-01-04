<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Suscriptores</title>
</head>
<body>
<?php
// Abrimos el archivo, pero esta vez para añadir.
$abierto = fopen ("suscriptores.txt", "a");

// Preparamos los datos
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$texto = $nombre." - ".$email;

// Intentamos añadirlos, validando que se haya podido hacer
if (fputs ($abierto,$texto)){

	print ("<p>Gracias por sus datos</p>");
	
} else {

	print ("<p>Hubo un error. Intente nuevamente</p>");

}

// Cerramos el archivo.
fclose ($abierto);
?>
</body>
</html>