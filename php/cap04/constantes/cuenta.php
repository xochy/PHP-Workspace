<!DOCTYPE html>
<html lang="es">
<?php include('lenguajes/castellano.php'); ?>

<head>
    <meta charset="utf-8">
    <title><?php print(NAVBAR_TITLE); ?></title>
</head>

<body>
    <h1><?php print(HEADING_TITLE); ?></h1>
    <h2><?php print(OVERVIEW_TITLE); ?></h2>
    <ul>
        <li><a href="show_all_orders.php"><?php print(OVERVIEW_SHOW_ALL_ORDERS); ?></a></li>
        <li><a href="show_previous_orders.php"><?php print(OVERVIEW_PREVIOUS_ORDERS); ?></a></li>
    </ul>
</body>

</html>