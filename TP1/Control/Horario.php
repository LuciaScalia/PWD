<?php
 
class Horario {
    public function sumarHorarios($horarios) {
        $cantHoras = 0;
        foreach ($horarios as $unHorario) {
            if ($unHorario != null) {
                $cantHoras = $cantHoras + $unHorario;
            }
        }
        return $cantHoras;
    }
}