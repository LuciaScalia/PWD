<?php

include_once "../../Control/Archivo.php";
include_once "../../../Utils/funciones.php";

$datos = darDatosSubmitted();
$obj = new Archivo();
$respuesta = $obj->subirArchivoTxt($datos);
$archivoDir = $obj->getDir() . $datos['archivo']['name'];
$handle = fopen($archivoDir, "r");
$contenido = fread($handle, filesize($archivoDir));

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
        echo "<textarea>$contenido</textarea>";
    } elseif ($respuesta === 2) {
        echo "El archivo debe ser de tipo TXT";
    } else {
        echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
        echo "<br><textarea>$contenido</textarea>";
    }
    ?>
</body>
</html>