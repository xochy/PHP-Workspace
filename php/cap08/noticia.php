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
fpassthru ($abierto);
fclose ($abierto);
?>
</p>
</body>
</html>