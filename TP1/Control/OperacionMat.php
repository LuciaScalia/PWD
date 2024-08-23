<?php

class OperacionMat {
    public function resolverOperacion($datos) {
        $resultado = "faltan datos";

        if ($datos['num1'] != null && $datos['num2'] != null) {
            switch ($operacion = $datos['operacion']) {
                case "suma":
                    $resultado = $datos['num1'] + $datos['num2'];
                    break;
                case "resta":
                    $resultado = $datos['num1'] - $datos['num2'];
                    break;
                case "multiplicacion":
                    $resultado = $datos['num1'] * $datos['num2'];
                    break;
            }
        }
        return $resultado;
    }
}