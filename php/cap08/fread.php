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
$principio = fread ($abierto,18);
fclose ($abierto);
print ($principio);
?>
</p>
</body>
</html>