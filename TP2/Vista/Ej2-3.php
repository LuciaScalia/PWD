<?php
$tituloPagina="Ejercicio 3";
include_once "../../Vista/Estructura/Encabezado.php";
echo "<link rel='stylesheet' type='text/css' href='Css/styleEj2.css'>"
?>

<div class="container">
    <div class="titulo">
        <h4>Datos personales</h4>
    </div>
    <form action="../../TP1/Vista/Action/actionEj3.php" method="post" name="formDatos" id="formDatos"
        class="needs-validation" novalidate>
        <label for="nombre">Nombre</label>
        <input class="form-control" type="text" name="nombre" id="nombre" required><br>
        <label for="apellido">Apellido</label>
        <input class="form-control" type="text" name="apellido" id="apellido" required><br>
        <label for="edad">Edad</label>
        <input class="form-control" type="number" name="edad" id="edad" required><br>
        <label for="direccion">Direccion</label>
        <input class="form-control" type="text" name="direccion" id="direccion" required><br>
        <div class="submit">
        <input class="form-control btn" type="submit" value="Enviar">
        </div>
    </form>
</div>

<script src="Js/Tp2-Ej2-(3,4,5,6).js"></script>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>