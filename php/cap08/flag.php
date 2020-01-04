<?php
$claves = array(1 => "secreta","ultra","anonima","123456");
$cuantos = count($claves);

// Declaramos la señal
$encontrada = "no";

for ($i=1; $i<=$cuantos; $i=$i+1){
	// Suponemos que llega de un formulario
	if ($_POST["clave"] == $claves[$i]){

		// Si se encuentra, modificamos el valor de la señal:
		$encontrada = "si";
	}
}

// Fuera del bucle, preguntamos por el valor de la señal:
if ($encontrada == "si"){

	echo '<p>Encontrado!</p>';

} else {

	echo '<p>NO se encontró</p>';

}
?>