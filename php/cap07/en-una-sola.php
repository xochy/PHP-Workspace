<?php
if (!isset($_COOKIE["mivariable"])) {
    // Si NO está presente, la creamos:
    setcookie("mivariable", "datos, datos y más datos", time() + 60);
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    ...etc...
</head>

<body>
    <h1>
        <?php
        if (isset($_COOKIE["mivariable"])) {
            // Si está disponible, la usamos:

            echo "La cookie contiene: ";
            echo $_COOKIE["mivariable"];
        } else {

            echo "Como es la primera vez que entra a esta página,
             acaba de enviarse al navegador la orden de crear la
              cookie, junto con este código y texto que está leyendo.
               Si vuelve a solicitar esta página otra vez pulsando F5, 
               el navegador enviará hacia el servidor la cookie y podrá
               ser leída y utilizada.";
        }
        ?>
    </h1>
</body>

</html>