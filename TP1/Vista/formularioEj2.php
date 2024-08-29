<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carga horaria</title>
</head>

<body>
    <div>
        <h4>Carga horaria</h4>
        <form action="../Vista/Action/actionEj2.php" method="get" name="formHorarios" id="formHorarios">
            lunes<input type="number" name="lunes" id="lunes" required><br><br>
            martes<input type="number" name="martes" id="martes" required><br><br>
            miercoles<input type="number" name="miercoles" id="miercoles" required><br><br>
            jueves<input type="number" name="jueves" id="jueves" required><br><br>
            viernes<input type="number" name="viernes" id="viernes" required><br><br>
            sabado<input type="number" name="sabado" id="sabado" required><br><br>
            domingo<input type="number" name="domingo" id="domingo" required><br><br>
            <input type="submit" value="Aceptar">
        </form>
    </div>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>