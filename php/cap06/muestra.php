<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Dirección</title>
</head>

<body>
    <?php
    if (isset($_POST["domicilio"]) and $_POST["domicilio"]!="") {

        print("<p>Su direccion es: ");
        print($_POST["domicilio"]);
        print("</p>");
    } else {

        print("<p>Oops! Parece que no pasó por el <a
href=\"formulario.html\">formulario</a>. Por favor, pase por él
y envíenos su domicilio.</p>");
    }
    ?>
</body>

</html>