<?php

include_once "../../../Utils/funciones.php";
include_once "../../Control/OperacionMat.php";

$datos = darDatosSubmitted();

$obj = new OperacionMat();
$resultado = $obj->resolverOperacion($datos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "El resultado es: $resultado"; ?>
</body>
</html>