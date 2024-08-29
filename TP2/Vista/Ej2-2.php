<?php
$tituloPagina="Carga horaria";
include_once "../../Vista/Estructura/Encabezado.php";
echo "<link rel='stylesheet' type='text/css' href='Css/styleEj2.css'>"
?>


<div class="container">
    <div class="titulo">
        <h4>Carga horaria</h4>
    </div>
    <form action="../../TP1/Vista/Action/actionEj2.php" method="get" name="formHorarios" id="formHorarios"
        class="needs-validation" novalidate>
        Lunes<br><input class="form-control" type="number" name="lunes" id="lunes" required><br>
        Martes<br><input class="form-control" type="number" name="martes" id="martes" required><br>
        Miercoles<br><input class="form-control" type="number" name="miercoles" id="miercoles" required><br>
        Jueves<br><input class="form-control" type="number" name="jueves" id="jueves" required><br>
        Viernes<br><input class="form-control" type="number" name="viernes" id="viernes" required><br>
        <div class="submit">
            <input class="form-control btn" type="submit" value="Aceptar">
        </div>
    </form>
    </div>
</div>

<script src="Js/Tp2-Ej2-2.js"></script>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>