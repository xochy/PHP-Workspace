<!DOCTYPE html>
<html lang="es">

<head>
    ...etc...
</head>

<body>
    <h1>
        <?php
        if (isset($_COOKIE["mivariable"])) {

            echo "La cookie contiene: ";
            echo $_COOKIE["mivariable"];
        } else {

            echo "Parece que no pasó por la página inicial.php, vuelva a ella así se crea la cookie.";
        }
        ?>
    </h1>
</body>

</html>