<?php 
include_once "../../../Utils/funciones.php";
include_once "../../Control/Archivo.php";

$datos = darDatosSubmitted();
$obj = new Archivo();
$respuesta = $obj->subirArchivoJpg($datos);
$archivoDir = $obj->getDir() . $datos['archivo']['name'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pel&iacute;cula introducida</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</head>

<body>
    <div>
        <div>
            <div>
                <div class="d-flex justify-content-end">
                    <button class="btn-close"></button>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="border">
                        <?php 
                        if ($respuesta === 0) {
                            echo "ERROR: no se pudo cargar el archivo";
                            } elseif ($respuesta === -1) {
                                echo "ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
                            } else {
                                echo <<<HTML
                                <div class="p-4" style="color: #129BEF;">
                                    <div style="background-color:powderblue;" class="p-4">
                                        <h3>Pel&iacute;cula introducida:</h3>
                                        <b>Título: </b> {$datos['titulo']}<br>
                                        <b>Actores: </b> {$datos['actores']}<br>
                                        <b>Director: </b> {$datos['director']}<br>
                                        <b>Guión: </b> {$datos['guion']}<br>
                                        <b>Producción: </b> {$datos['produccion']}<br>
                                        <b>Año: </b> {$datos['anio']}<br>
                                        <b>Nacionalidad: </b> {$datos['nacionalidad']}<br>
                                        <b>Género: </b> {$datos['genero']}<br>
                                        <b>Duración: </b> {$datos['duracion']}<br>
                                        <b>Restricción de edad: </b> {$datos['restriccionEdad']}
                                    </div>
                                    <br><div class="d-flex justify-content-center">
                                        <h3>Poster</h3>
                                    </div>
                                    <div>
                                        <img src='$archivoDir'>
                                    </div>
                                </div>
                                HTML;
                            }?>
                     </div>
                </div>   
            </div>
        </div>
    </div>
</body>

</html>