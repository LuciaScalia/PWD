<?php

class MensajeEdad {
    public function escribirMensaje($info) {
        $mensaje = "Faltan datos";
        if (count($info) === 4) {
            if ($info['edad'] >= 18) {
                $mensaje = "mayor";
            } else {
                $mensaje = "menor";
            }
            $mensaje = "Hola, yo soy " . $info['nombre'] . " " . $info['apellido'] . ". Soy $mensaje de edad (" . $info['edad'] . ") y vivo en " . $info['direccion'];
        }
        return $mensaje;
    }
}