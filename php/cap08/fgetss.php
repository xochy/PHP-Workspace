<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Clima</title>
</head>
<body>
<?php
$abierto = fopen ("clima.html", "r");
$caracteres = fgetss ($abierto,150);
fclose ($abierto);
print ($caracteres);
?>
</body>
</html>