<?php

include_once "../../Control/Usuario.php";
include_once "../../../Utils/funciones.php";

$usuariosSistema = [
    ["usuario" => "Majo", "contra" => "1234567a"],
    ["usuario" => "Cristian34", "contra" => "8765432b"],
    ["usuario" => "Cele10", "contra" => "1111111a"],
    ["usuario" => "Paula Sanchez", "contra" => "b2222222"]
];

$obj = new Usuario();
$datos = darDatosSubmitted();
$accesoMensaje = $obj->verificarUsuario($datos, $usuariosSistema);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso</title>
</head>
<body>
    <?php echo $accesoMensaje; ?>
</body>
</html>