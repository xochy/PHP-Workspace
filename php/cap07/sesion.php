<?php
session_start();
$identificador = session_id();
echo "El identificador de esta sesión es: $identificador";
?>