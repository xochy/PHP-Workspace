<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Página que incluye otros archivos</title>
</head>
<body>
<div id="contenedor">
  <?php include("encabezado.php"); ?>
  <div id="contenidoPrincipal"> Contenido principal </div>
  <?php include("botonera.php"); ?>
  <?php include("pie.php"); ?>
</div><!-- cierre del contenedor -->
</body>
</html>