<?php 
    $tituloPagina="Subir archivo txt";
    include_once "../../Vista/Estructura/Encabezado.php";
?>
<body>
    <form method="post" action="Action/subirArchivoTxt.php" enctype="multipart/form-data">
        Ingrese el archivo: <input type="file" name="archivo" id="archivo">
        <input type="submit" value="Subir archivo">
    </form>
<?php
include_once "../../Vista/Estructura/Pie.php";
?>