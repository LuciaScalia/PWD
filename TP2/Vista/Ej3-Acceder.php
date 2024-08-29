<?php
$tituloPagina="Ejercicio 3";
include_once "../../Vista/Estructura/Encabezado.php";
echo "<link rel='stylesheet' type='text/css' href='Css/styleEj3.css'>"
?>

<body class="bg-secondary d-flex justify-content-center align-items-center vh-100">
    <div class="d-flex justify-content-center text-muted">
        <div class="bg-white p-4 shadow-sm col-md-5 vh-75 rounded">
            <button class="btn-close float-end"></button>
            <div class="container">
            <form class="row g-4" action="Action/verificaPass.php" method="post" name="formUsuario" id="formUsuario" class="needs-validation" novalidate>
                <div class="text-dark text-center fs-2 mb-3 mt-4">Member Login</div>
                
                    <div class="form-group">
                        <i class="fa fa-user"></i>
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Username" required>
                    </div>
                    <div class="form-group position-relative">
                        <i class="fa fa-lock"></i>
                        <input type="password" class="form-control" name="contra" id="contra" placeholder="Password" required>
                    </div>
                    <button type="submit" class="btn btn-success btn-block" name="Login" id="Login">Login</button>
                
                
            </form>  </div> 

        </div>
    </div>

  <script src="Js/Tp2-Ej3-validarAcceso.js"></script>
</body>
</html>