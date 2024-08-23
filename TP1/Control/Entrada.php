<?php 

class Entrada {
    public function calcularPrecio($datos) {
        $entradaPrecio = "faltan datos";
        
        if ($datos['esEstudiante'] != null && $datos['edad'] != null) {
            $entradaPrecio = 300;
            $esEstudiante = $datos['esEstudiante'];
            $edad = $datos['edad'];
            if ($esEstudiante == "si" || $edad < 12) {
                if ($edad  >= 12) {
                    $entradaPrecio = 180;
                } else {
                    $entradaPrecio = 160;
                }
            }
        }
       
        return $entradaPrecio;
    }
}