<?php

class Archivo {
    private $dir;

    public function __construct() {
        $this->dir = "../../Archivos/";
    }

    public function getDir() {
        return $this->dir;
    }

    public function setDir($dir) {
        $this->dir = $dir;
    }

    public function subirArchivoPdfDoc($arreglo) {
        if ($arreglo["archivo"]['error'] <= 0) {
            if ($arreglo['archivo']['type'] == "application/pdf" || $arreglo['archivo']['type'] == "applicaction/doc") {
                if ($arreglo['archivo']['size'] <= 2097152) {
                    if (!copy($arreglo['archivo']['tmp_name'],  $this->getDir().$arreglo['archivo']['name'])) {
                        $respuesta = 0; //"ERROR: no se pudo cargar el archivo";
                    } else {
                        $respuesta = 1; //"El archivo" . $arreglo['archivo']['name'] . " se ha copiado con éxito";
                    }
                } else {
                    $respuesta = 2; //"El archivo no debe pesar más de 2M"
                }
            } else {
                $respuesta = 3; //"El archivo debe ser de tipo PDF o DOC"
            }
        } else {
            $respuesta = -1; //"ERROR: no se pudo cargar el archivo. No se pudo acceder al archivo Temporal";
        } 
        return $respuesta;
    }

    public function subirArchivoTxt($arreglo) {
        if ($arreglo['archivo']['error'] <= 0) {
            if ($arreglo['archivo']['type'] == "text/plain") {
                if (!copy($arreglo['archivo']['tmp_name'],  $this->getDir().$arreglo['archivo']['name'])) {
                    $respuesta = 0;
                } else {
                    $respuesta = 1;
                }
            } else {
                $respuesta = 2; //"El archivo debe ser de tipo TXT"
            }
        } else {
            $respuesta = -1;
        }
    }

    public function subirArchivoJpg($arreglo) {
        if ($arreglo['archivo']['error'] <= 0) {
            if ($arreglo['archivo']['type'] == "image/jpeg") {
                if (!copy($arreglo['archivo']['tmp_name'],  $this->getDir().$arreglo['archivo']['name'])) {
                    $respuesta = 0;
                } else {
                    $respuesta = 1;
                }
            } else {
                $respuesta = 2; //"El archivo debe ser de tipo JPG"
            }
        } else {
            $respuesta = -1;
        }
    }
}