<?php
  $tituloPagina="Ejercicio 1";
  include_once "../../Vista/Estructura/Encabezado.php";
?>

  <div class="container w-100 h-100 align-middle">
    <h3 class="mt-5 d-flex justify-content-center">Verificaci&oacute;n con Bootstrap</h3>
    <div class="g-2 shadow-sm p-3 mb-5 mt-4 col-sm-4 mx-auto border">
      <form class="row g-3 needs-validation" novalidate>
        <div class="mb-2">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" name="nombre" id="nombre" class="form-control" required>
          <div class="valid-feedback">
            Dato v&aacute;lido!
          </div>
          <div class="invalid-feedback">
            Dato inv&aacute;lido!
          </div>
        </div>
        <div class="mb-2">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" name="apellido" id="apellido" class="form-control" required>
          <div class="valid-feedback">
            Dato v&aacute;lido!
          </div>
          <div class="invalid-feedback">
            Dato inv&aacute;lido!
          </div>
        </div>
        <div class="mb-2">
          <label for="pais" class="form-label">Pa&iacute;s</label>
          <select class="form-select" name="pais" id="pais" required>
            <option selected disabled value="">Seleccione...</option>
            <option value="argentina">Argentina</option>
            <option value="chile">Chile</option>
            <option value="peru">Per&uacute;</option>
            <option value="bolivia">Bolivia</option>
            <option value="paraguay">Paraguay</option>
          </select>
          <div class="valid-feedback">
            Dato v&aacute;lido!
          </div>
          <div class="invalid-feedback">
            Dato inv&aacute;lido!
          </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Enviar">
      </form>
    </div>
  </div>
  <script src="Js/Ej1-ValidandoForm.js"></script>

<?php
include_once "../../Vista/Estructura/Pie.php";
?>