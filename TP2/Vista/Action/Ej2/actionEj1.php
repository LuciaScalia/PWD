<?php
//Recupera los datos de la interfaz
/*$numero = $_GET['numero'];

$datos = [
    'numero' => $numero
];

var_dump($datos);*/

include_once "../../../../TP1/Control/VerNumero.php";
include_once "../../../../Utils/funciones.php";

$datos = darDatosSubmitted();

$obj = new VerNumero();
$mensaje = $obj->devolverSigno($datos);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver numero</title>
</head>
<body>
    <p><?php echo "El numero ingresado es $mensaje"; ?></p>
    <a href="../../Ej2-1.php">Volver</a>
</body>
</html>

