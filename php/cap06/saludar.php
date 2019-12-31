<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Condicional con else</title>
</head>

<body>
    <p>
        <?php
        if ($_POST["sexo"] == "masculino") {

            print("¡Hola hombre!");
        } else {

            print("¡Hola mujer!");
        }
        ?>
    </p>
</body>

</html>