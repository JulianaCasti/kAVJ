<?php

$correo_electronico = $_POST["email"];
$clave = $_POST["clave"];

echo "<h2>Información recibida desde PHP</h2>";

echo "El nombre del usuario es: " . $correo_electronico . "<br/>";
echo "La contraseña del usuario es: " . $clave . "<br/>";

?>
