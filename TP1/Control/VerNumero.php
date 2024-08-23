<?php

class VerNumero {
    public function devolverSigno($datos) {
        $numero = $datos['numero'];
        $mensaje = "incorrecto";
        if ($numero > 0) {
            $mensaje = "positivo"; 
        } elseif ($numero < 0) {
            $mensaje = "negativo";
        } elseif ($numero == "0") {
            $mensaje = "cero";
        }
        return $mensaje;
    }
}