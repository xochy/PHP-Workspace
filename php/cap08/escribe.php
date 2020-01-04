<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Escribir datos a un archivo de texto</title>
</head>
<body>
<?php
// Abrimos el archivo.
$abierto = fopen ("deposito.txt", "w");

// Preparamos los datos, desde ya que deberíamos validarlos antes en un caso real
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$texto = $nombre." - ".$email;

// Intentamos escribirlos, validando que se haya podido hacer
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