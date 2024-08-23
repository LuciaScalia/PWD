<?php

class Usuario {

    public function verificarUsuario($datos, $usuariosSistema) {
        $mensaje = "El usuario " . $datos['usuario'] . " no existe";
        $i = 0;
        while ($usuariosSistema[$i]['usuario'] != $datos['usuario'] && $i < count($usuariosSistema) - 1) {
            $i++;
        }
    
        if ($i != count($usuariosSistema) - 1) {
            $mensaje = "La contraseña es incorrecta";
            if ($usuariosSistema[$i]['contra'] == $datos['contra']) {
                $mensaje = "¡Hola, " . $datos['usuario'] . "!";
            }
        }
        return $mensaje;
    }
    
}