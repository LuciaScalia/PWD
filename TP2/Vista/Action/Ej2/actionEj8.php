<?php 
include_once "../../../Utils/funciones.php";
include_once "../../Control/Entrada.php";

$datos = darDatosSubmitted();

$obj = new Entrada();
$precioEntrada = $obj->calcularPrecio($datos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precio de entrada</title>
</head>
<body>
    <?php echo "Precio de la entrada: $$precioEntrada"; ?>
</body>
</html>