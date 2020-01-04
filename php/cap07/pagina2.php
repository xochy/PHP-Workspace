<?php
session_start();
//* debemos ejecutar esta función para continuar la sesión existente
echo "Su nombre es: ".$_SESSION["nombre"];
?>
<html>
<!-- etc -->
<p><a href="pagina1.php">Volver</a></p>
<!-- etc -->
</html>