<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <div class="container">
        <form action="../Vista/Action/actionEj8.php" method="post" name="formEntrada" id="formEntrada">
            <h4>Soy estudiante:</h4>
            <div>
                <input type="radio" name="esEstudiante" value="si" required> Si<br>
                <input type="radio" name="esEstudiante" value="no" required> No<br>
            </div>
            <h4>Edad:</h4>
            <div>
                <input type="number" name="edad" id="edad" required><br><br>
                <input type="submit" value="Aceptar">
                <input type="reset" value="Limpiar">
            </div>
        </form>
        
<?php
include_once "../../Vista/Estructura/Pie.php";
?>