<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <div>
        <div>
            <form name="form" id="form" action="../Vista/Action/actionEj1.php" method="get">
            <label for="numero" class="form-label mt-3">N&uacute;mero</label>
            <input type="number" name="numero" id="numero" class="form-control" required>
            <br><br>
            <div>   
                <input type="submit" value="Aceptar" class="btn btn-info mt-2 text-white b">
            </div>
        </form>
        </div>
    </div>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>