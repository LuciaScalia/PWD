<?php
include_once "../../../Utils/funciones.php";
include_once "../../Control/MensajeDeportes.php";

$datos = darDatosSubmitted();

$obj = new MensajeDeportes();
$mensaje = $obj->escribirMensaje($datos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje deportes</title>
</head>
<body>
    <?php echo $mensaje;?>
</body>
</html>