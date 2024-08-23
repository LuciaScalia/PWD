<?php
include_once "../../Control/Horario.php";
include_once "../../../Utils/funciones.php";

$horarios = darDatosSubmitted();

$obj = new Horario($horarios);
$cantHoras = $obj->sumarHorarios($horarios);

//print_r($horarios);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumar horarios</title>
</head>
<body>
    <p><?php echo "Se cursan $cantHoras horas por semana";?></p>
</body>
</html>