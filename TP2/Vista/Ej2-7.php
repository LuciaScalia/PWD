<?php
$tituloPagina="Ejercicio 7";
include_once "../../Vista/Estructura/Encabezado.php";
echo "<link rel='stylesheet' type='text/css' href='Css/styleEj2.css'>"
?>

<div class="container">
    <div class="titulo">
        <h4>Operaciones</h4>
    </div>
    <form action="../../TP1/Vista/Action/actionEj7.php" method="get" name="formOperacion" id="formOperacion" class="needs-validation" novalidate>
        <input class="form-control" type="text" name="num1" id="num1" required><br>
        <input class="form-control" type="text" name="num2" id="num2" required><br>
        <select name="operacion" id="operacion" class="form-select">
            <option value="suma">SUMA</option>
            <option value="resta">RESTA</option>
            <option value="multiplicacion">MULTIPLICACION</option>
        </select><br>
        <input class="form-control btn" type="submit" value="Enviar">
    </form>
</div>
    
<script src="Js/Tp2-Ej2-7.js"></script>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>