<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deporte</title>
</head>

<body>
    <div>
    <form action="../Vista/Action/actionEj6.php" method="post" name="formDatos" id="formDatos">
        Nombre: <input type="text" name="nombre" id="nombre" required><br><br>
        Apellido: <input type="text" name="apellido" id="apellido" required><br><br>
        Edad: <input type="number" name="edad" id="edad" required><br><br>
        Direccion: <input type="text" name="direccion" id="direccion" required><br><br>

        <h4>Nivel de estudio:</h4>
        <input type="radio" name="estudios" id="sinEstudios" value="sin estudios" required> No tengo estudios<br>
        <input type="radio" name="estudios" id="estudiosPrimarios" value="estudios primarios" required> Estudios
        primarios<br>
        <input type="radio" name="estudios" id="estudiosSecundarios" value="estudios secundarios" required> Estudios
        secundarios<br>

        <h4>Sexo:</h4>
        <input type="radio" name="sexo" name="femenino" id="femenino" value="femenino" required> Femenino<br>
        <input type="radio" name="sexo" name="masculino" id="masculino" value="masculino" required> Masculino<br>
        <input type="radio" name="sexo" name="otro" id="otro" value="otro" required> Otro<br><br>

        <h4>Seleccione los deportes que practica:</h4>
        <input type="checkbox" name="deporte[]" id="futbol" value="futbol"> Futbol<br>
        <input type="checkbox" name="deporte[]" id="basket" value="basket"> Basket<br>
        <input type="checkbox" name="deporte[]" id="tenis" value="tenis"> Tenis<br>
        <input type="checkbox" name="deporte[]" id="voley" value="voley"> Voley<br>
        <input type="checkbox" name="deporte[]" id="ninguno" value="ninguno"> Ninguno<br><br>

        <input type="submit" value="Aceptar">
    </form>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>