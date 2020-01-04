<?php
session_start();
$_SESSION["nombre"] = "pepe";
//* desde ya que ese dato en vez de asignarlo aquí, podría venir de un formulario, o de un enlace. 
//* Por ejemplo:
//* $_SESSION["nombre"] = $_POST["campoX"];
//* o bien:
//*$_SESSION["nombre"] = $_GET["enlaceX"];

echo "Hola: ".$_SESSION["nombre"];
?>
<html>
<!-- etc -->
<p><a href="pagina2.php">Siguiente página</a></p>
<!-- etc -->
</html>