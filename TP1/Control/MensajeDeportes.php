<?php

class MensajeDeportes {
    public function escribirMensaje($datos) {
        $valoresDatos = array_values($datos);
        $mensaje = "Faltan datos";
        $cadenaDeportes = "ninguno";

           if ($datos['edad'] >= 18) {
               $mensaje = "mayor";
           } else {
               $mensaje = "menor";
           }

            $cadenaDeportes = "";
            foreach ($datos['deporte'] as $unDeporte) {
                $cadenaDeportes = $cadenaDeportes . $unDeporte . ", ";
            }
            $cadenaDeportes = rtrim($cadenaDeportes, ", ");
        

           $mensaje = "Hola, yo soy " . $datos['nombre'] . " " . $datos['apellido'] . ". Soy $mensaje de edad (" . $datos['edad'] . ") y vivo en " . $datos['direccion'] . "<br>" .
           "Nivel de estudios: " . $datos['estudios'] . "<br>" . "Sexo: " . $datos['sexo'] . "<br>" .
           "Deportes: $cadenaDeportes";
            return $mensaje;
    }
}
