<?php
$tituloPagina="Ejercicio 8";
include_once "../../Vista/Estructura/Encabezado.php";
echo "<link rel='stylesheet' type='text/css' href='Css/styleEj2.css'>"
?>

<div class="container">
    <div class="titulo">
        <h4>Calcular precio de entrada</h4>
    </div>
    <form action="../../TP1/Vista/Action/actionEj8.php" method="post" name="formEntrada" id="formEntrada"
        class="needs-validation" novalidate>
        <h5>Soy estudiante:</h5>
        <div>
            <input class="form-check-input" type="radio" name="esEstudiante" value="si" required> Si<br>
            <input class="form-check-input" type="radio" name="esEstudiante" value="no" required> No<br>
        </div>
        <h5>Edad:</h5>
        <div>
            <input class="form-control" type="number" name="edad" id="edad" required>
            <input class="form-control btn" type="submit" value="Aceptar">
            <input class="form-control reset" type="reset" value="Limpiar">
        </div>
    </form>
</div>

<script src="Js/Tp2-Ej2-8.js"></script>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>