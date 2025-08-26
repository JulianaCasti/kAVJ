<?php

$nombres   = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$direccion = $_POST["direccion"];
$telefono  = $_POST["telefono"];
$correo    = $_POST["correo"];
$rol       = $_POST["rol"];
$usuario   = $_POST["usuario"];
$clave     = $_POST["clave"];
$validar   = isset($_POST["validar"]) ? "Sí" : "No";

echo "<h2>Información recibida desde PHP</h2>";

echo "Nombres: " . $nombres . "<br/>";
echo "Apellidos: " . $apellidos . "<br/>";
echo "Dirección: " . $direccion . "<br/>";
echo "Teléfono: " . $telefono . "<br/>";
echo "Correo: " . $correo . "<br/>";
echo "Rol: " . $rol . "<br/>";
echo "Usuario: " . $usuario . "<br/>";
echo "Contraseña: " . $clave . "<br/>";
echo "¿Aceptó términos y condiciones?: " . $validar . "<br/>";
?>
