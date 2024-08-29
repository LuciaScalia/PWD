<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <div class="container">
        <h4>Nivel de estudio:</h4>
        <form action="../Vista/Action/actionEj5.php" method="post" name="formEstudio" id="formEstudio">
            <input type="radio" name="estudios" id="sinEstudios" value="sin estudios" required> No tengo estudios<br>
            <input type="radio" name="estudios" id="estudiosPrimarios" value="estudios primarios" required> Estudios
            primarios<br>
            <input type="radio" name="estudios" id="estudiosSecundarios" value="estudios secundarios" required> Estudios
            secundarios<br>

            <h4>Sexo:</h4>
            <input type="radio" name="sexo" id="femenino" value="femenino" required> Femenino<br>
            <input type="radio" name="sexo" id="masculino" value="masculino" required> Masculino<br>
            <input type="radio" name="sexo" id="otro" value="otro" required> Otro<br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>