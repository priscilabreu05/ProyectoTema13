<?php

echo ("El nombre sin sanitizar es: " . $_GET['nombre'] . "<br>");

$apellido = htmlspecialchars(trim($_GET['apellido']), ENT_QUOTES, 'utf-8');

echo ("El apellido sanitizado es: " . $apellido);

?>