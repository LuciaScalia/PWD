<?php

include_once "../../../Utils/funciones.php";
include_once "../../Control/mensaje.php";

$info = darDatosSubmitted();

$obj = new Mensaje();
$mensaje = $obj->escribirMensaje($info);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensaje</title>
</head>
<body>
    <?php echo $mensaje; ?>
</body>
</html>