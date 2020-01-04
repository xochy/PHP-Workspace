<?php
// Recordar enviar por "post" hacia esta página la variable "numeros"

while (list($clave,$valor) = each($_POST["numeros"])){

	print("El elemento ".$clave." contiene un ".$valor."<br>");

}
?>