<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Textos</title>
</head>
<body>
<p>
<?php
$abierto = fopen ("textos.txt", "r");
$caracteres = fgets ($abierto,10);
fclose ($abierto);
print ($caracteres);
?>
</p>
</body>
</html>