<style type="text/css">
.par {
background-color: #999;
color: #fff;
}
</style>
<?php
$productos = array(1 => "manzanas","naranjas","peras","uvas");

$cuantos = count($productos);

echo "<table>";

for ($i=1; $i<=$cuantos; $i=$i+1){

	if ($i%2 == 0){
		
		echo '<tr class="par"><td>La fila de '.$productos[$i].' es par</td></tr>';
		
	} else {

		echo '<tr class="impar"><td>La fila de '.$productos[$i].' es impar</td></tr>';
	}
}

echo "</table>";
?>