<?php

include_once "../../Control/Archivo.php";
include_once "../../../Utils/funciones.php";

$datos = darDatosSubmitted();
//print_r($_FILES);

$archivo = new Archivo();
$respuesta = $archivo->subirArchivoPdfDoc($datos);
$pathArchivo = $archivo->getDir() . $datos['archivo']['name'];
//echo $datos['archivo']['size'];
//echo $respuesta;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo cargado</title>
</head>
<body>
    <?php 
    if ($respuesta === 0) {
        echo "ERROR: no se pudo cargar el archivo";
    } elseif ($respuesta === 1) {
        echo "El archivo " . $datos['archivo']['name'] . " se ha copiado con éxito";
        echo "<br>";
        echo "<a href='$pathArchivo'>Ver archivo</a>";
    } elseif ($respuesta === 2) {
        echo "El archivo no debe pesar más de 2M";
    } elseif ($respuesta === 3) {
        echo "El archivo debe ser de tipo PDF o DOC";
    } else {
        echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
    }
    ?>
</body>
</html>

