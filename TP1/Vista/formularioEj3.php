<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
    <link rel="stylesheet" type="text/css" href="Css/styleEj3.css">
</head>

<body>
    <div class="container">
        <form action="../Vista/Action/actionEj3.php" method="post" name="formDatos" id="formDatos">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre" required><br><br>
            <label for="apellido">Apellido</label>
            <input type="text" name="apellido" id="apellido" required><br><br>
            <label for="edad">Edad</label>
            <input type="number" name="edad" id="edad" required><br><br>
            <label for="direccion">Direccion</label>
            <input type="text" name="direccion" id="direccion" required><br><br>
            <input type="submit" value="Enviar">
        </form>
    </div>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>