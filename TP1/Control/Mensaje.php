<?php 

//“Hola, yo soy 
//nombre , apellido tengo edad años y vivo en dirección”

class Mensaje {
    public function escribirMensaje($info) {
        $mensaje = "Faltan datos";
        $valoresInfo = array_values($info);
        $i = 0;
        while($valoresInfo[$i] != null && $i < 3) {
            $i++;
        }
        if ($i === 3) {
            $mensaje = "Hola, yo soy " . $info['nombre'] . " " . $info['apellido'] . " tengo " . $info['edad'] . " años y vivo en " . $info['direccion'];
        }
        return $mensaje;
    }
}