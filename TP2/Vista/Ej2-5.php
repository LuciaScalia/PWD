<?php
$tituloPagina="Ejercicio 5";
include_once "../../Vista/Estructura/Encabezado.php";
echo "<link rel='stylesheet' type='text/css' href='Css/styleEj2.css'>"
?>

<div class="container">
    <h4>Nivel de estudio:</h4>
    <form action="../../TP1/Vista/Action/actionEj5.php" method="post" name="formDatos" id="formDatos"
        class="needs-validation" novalidate>
        <div>
            <input class="form-check-input" type="radio" name="estudios" id="sinEstudios" value="sin estudios" required>
            No tengo estudios<br>
            <input class="form-check-input" type="radio" name="estudios" id="estudiosPrimarios"
                value="estudios primarios" required> Estudios
            primarios<br>
            <input class="form-check-input" type="radio" name="estudios" id="estudiosSecundarios"
                value="estudios secundarios" required> Estudios
            secundarios<br>
        </div>
        <h4>Sexo:</h4>
        <input class="form-check-input" type="radio" name="sexo" id="femenino" value="femenino" required> Femenino<br>
        <input class="form-check-input" type="radio" name="sexo" id="masculino" value="masculino" required>
        Masculino<br>
        <input class="form-check-input" type="radio" name="sexo" id="otro" value="otro" required> Otro<br><br>
        <div class="submit">
            <input class="form-control btn" type="submit" value="Enviar">
        </div>
    </form>
</div>

<script src="Js/Tp2-Ej2-(3,4,5,6).js"></script>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>