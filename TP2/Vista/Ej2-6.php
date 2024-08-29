<?php
$tituloPagina="Deportes";
include_once "../../Vista/Estructura/Encabezado.php";
echo "<link rel='stylesheet' type='text/css' href='Css/styleEj2.css'>"
?>

<div class="container col-md-8">
    <div class="titulo">
        <h4>Datos personales</h4>
    </div>
    <form action="../../TP1/Vista/Action/actionEj6.php" method="post" name="formDatos" id="formDatos"
        class="needs-validation" novalidate>
        Nombre <br><input class="form-control" type="text" name="nombre" id="nombre" required><br>
        Apellido <br><input class="form-control" type="text" name="apellido" id="apellido" required><br>
        Edad <br><input class="form-control" type="number" name="edad" id="edad" required><br>
        Direccion <br><input class="form-control" type="text" name="direccion" id="direccion" required><br>

        <h4>Nivel de estudio</h4>
        <input class="form-check-input" type="radio" name="estudios" id="sinEstudios" value="sin estudios" required> No tengo estudios<br>
        <input class="form-check-input" type="radio" name="estudios" id="estudiosPrimarios" value="estudios primarios" required> Estudios
        primarios<br>
        <input class="form-check-input" type="radio" name="estudios" id="estudiosSecundarios" value="estudios secundarios" required> Estudios
        secundarios<br><br>

        <h4>Sexo</h4>
        <input class="form-check-input" type="radio" name="sexo" name="femenino" id="femenino" value="femenino" required> Femenino<br>
        <input class="form-check-input" type="radio" name="sexo" name="masculino" id="masculino" value="masculino" required> Masculino<br>
        <input class="form-check-input" type="radio" name="sexo" name="otro" id="otro" value="otro" required> Otro<br><br>

        <h4>Deportes que practica:</h4>
        <input class="form-check-input" type="checkbox" name="deporte[]" id="futbol" value="futbol" required> Futbol<br>
        <input class="form-check-input" type="checkbox" name="deporte[]" id="basket" value="basket" required> Basket<br>
        <input class="form-check-input" type="checkbox" name="deporte[]" id="tenis" value="tenis" required> Tenis<br>
        <input class="form-check-input" type="checkbox" name="deporte[]" id="voley" value="voley" required> Voley<br>
        <input class="form-check-input" type="checkbox" name="deporte[]" id="ninguno" value="ninguno" required> Ninguno<br><br>

        <input class="form-control btn" type="submit" value="Aceptar">
    </form>
</div>

<script src="Js/Tp2-Ej2-(3,4,5,6).js"></script>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>