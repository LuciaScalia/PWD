<?php
$tituloPagina="Cargar Pelicula";
include_once "../../Vista/Estructura/Encabezado.php";
echo "<link rel='stylesheet' type='text/css' href='Css/styleEj4.css'>"
?>

<body class="d-flex justify-content-center vh-100">
    <div class="container mt-2">
        <div class="border bs-info rounded" id="cinema">
            <h5 class="ml-2 text-blue">Cinem@as</h5>
        </div>
        <div class="border border-top-0 rounded">
            <br>
            <form name="formPelicula" id="formPelicula" method="post" action="Action/ej4-actionPeliculas.php"
                class="needs-validation" novalidate>

                <div class="d-flex">
                    <div class="form-group col-md-6">
                        <label for="titulo" class="form-label">T&iacute;tulo</label>
                        <input class="form-control" type="text" name="titulo" id="titulo" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="actores" class="form-label">Actores</label>
                        <input type="text" name="actores" id="actores" class="form-control" required>
                    </div>
                </div>

                <!---->

                <div class="d-flex">
                    <div class="form-group col-md-6">
                        <label for="director" class="form-label">Director</label>
                        <input type="text" name="director" id="director" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="guion" class="form-label">Gui&oacute;n</label>
                        <input type="text" name="guion" id="guion" class="form-control" required>
                    </div>
                </div>

                <!---->
                <div class="d-flex mt-2">
                    <div class="form-group col-md-6">
                        <label for="produccion" class="form-label">Producci&oacute;n</label>
                        <input type="text" name="produccion" id="produccion" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="anio" class="form-label">A&ntilde;o</label>
                        <input type="text" name="anio" id="anio" class="form-control" required>
                    </div>
                </div>
                <!---->
                <div class="d-flex mt-2">
                    <div class="form-group col-md-6">
                        <label for="nacionalidad" class="form-label">Nacionalidad</label>
                        <input type="text" name="nacionalidad" id="nacionalidad" class="form-control" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="genero" class="form-label">G&eacute;nero</label><br>
                        <select class="form-select form-control" name="genero"
                            id="genero"><!--No funciona el form-select-->
                            <option selected disabled value="">Seleccione...</option>
                            <option value="comedia">Comedia</option>
                            <option value="drama">Drama</option>
                            <option value="terror">Terror</option>
                            <option value="romantica">Rom&iacute;ntica</option>
                            <option value="suspenso">Suspenso</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                </div>
                <!---->
                <div class="d-flex mr-5 mt-2">
                    <div class="form-group col-md-3">
                        <label for="duracion" class="form-label">Duraci&oacute;n</label>
                        <input type="text" name="duracion" id="duracion" class="form-control" placeholder="minutos"
                            required>
                    </div>
                    <div class="ml-5 mt-1">
                        <label for="restriccionEdad" class="form-label mb-1">Restricciones de edad</label><br>
                        <div class="mt-1">
                            <input type="radio" name="restriccionEdad" id="todoPublico" class="form-check-input"
                                value="todos los públicos" required> Todos los
                            p&uacute;blicos &nbsp;&nbsp;
                            <input type="radio" name="restriccionEdad" id="mayorSiete" class="form-check-input"
                                value="mayores de 7 años" required> Mayores de 7
                            a&ntilde;os &nbsp;&nbsp;
                            <input type="radio" name="restriccionEdad" id="mayorEdad" class="form-check-input"
                                value="mayores de 18 años" required>
                            Mayores de 18
                            a&ntilde;os
                        </div>
                    </div>
                </div>
                <!---->
                <div class="form-group  mt-2">
                    <label for="sinopsis" class="form-label">Sin&oacute;psis</label><br>
                    <textarea name="sinopsis" id="sinopsis" class="form-control" required></textarea>
                </div>
                <div class="col-md-12 mt-4 mb-4 d-flex justify-content-end">
                    <div class="mr-1">
                        <input type="submit" value="Enviar" class="form-control btn btn-info text-white">
                    </div>
                    <div>
                        <input type="reset" value="Borrar" class="form-control ">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../TP3/Vista/Js/ej4-validarPelicula.js"></script>
</body>
</html>