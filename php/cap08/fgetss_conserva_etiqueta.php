<?php
$abierto = fopen ("clima.html", "r");
$caracteres = fgetss ($abierto,150,"<p>");
fclose ($abierto);
print ($caracteres);
?>