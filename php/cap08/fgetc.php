<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Noticia</title>
</head>
<body>
<p>
<?php
$abierto = fopen ("noticia.txt", "r");
$caracter = fgetc ($abierto);
print ($caracter);// imprime solo el primer caracter del archivo; en nuestra anterior noticia, mostraría una “L”.
fclose ($abierto);
?>
</p>
</body>
</html>