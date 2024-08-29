<?php
$tituloPagina="Ejercicio 2";
include_once "../../Vista/Estructura/Encabezado.php";
echo "<link rel='stylesheet' type='text/css' href='Css/styleEj2.css'>"
?>

<div class="container">
    <div>
        <form name="form" id="form" action="Action/Ej2/actionEj1.php" method="get" class="needs-validation"
        novalidate>
        <label for="numero" class="form-label mt-3">N&uacute;mero</label>
        <input type="number" name="numero" id="numero" class="form-control" required>
        <div>   
            <input class="form-control btn" type="submit" value="Aceptar">
        </div>
    </form>
    </div>
</div>
<script src="Js/Tp2-Ej2-1.js"></script>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>