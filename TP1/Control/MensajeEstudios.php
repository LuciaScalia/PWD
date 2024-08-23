<?php

class MensajeEstudios {
    public function escribirMensaje($datos) {
        $mensaje = "Faltan datos";
        if (count($datos) === 2) {
            $mensaje = "Nivel de estudios: " . $datos['estudios'] . "<br>" . "Sexo: " . $datos['sexo'];
        }
        return $mensaje;
    }
}