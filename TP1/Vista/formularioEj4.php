<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <div>
        <form action="../Vista/Action/actionEj4.php" method="post" name="formDatos" id="formDatos">
            Nombre: <input type="text" name="nombre" id="nombre" required><br><br>
            Apellido: <input type="text" name="apellido" id="apellido" required><br><br>
            Edad: <input type="number" name="edad" id="edad" required><br><br>
            Direccion: <input type="text" name="direccion" id="direccion" required><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>