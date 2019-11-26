<?php
$dias[1] = "Lunes"; //* especificamos un índice inicial (el "1" en este caso), y luego dejamos que PHP coloque los demás automáticamente:
$dias[] = "Martes";
$dias[] = "Miércoles";
$dias[] = "Jueves";
$dias[] = "Viernes";

print ($dias[1]."<br>".$dias[2]."<br>");
print ($dias[3]."<br>".$dias[4]."<br>".$dias[5]);
//*imprime Lunes<br>Martes<br>Miércoles<br>Jueves<br>Viernes
?>