<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>
<body>
    <div class="container">
        <form action="../Vista/Action/actionEj7.php" method="get" name="formOperacion" id="formOperacion">
            <input type="text" name="num1" id="num1" required><br>
            <input type="text" name="num2" id="num2" required><br>
            <select name="operacion" id="operacion">
                <option value="suma">SUMA</option>
                <option value="resta">RESTA</option>
                <option value="multiplicacion">MULTIPLICACION</option>
            </select><br><br>
            <input type="submit" value="Enviar">
        </form>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>