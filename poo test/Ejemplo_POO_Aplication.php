<?php

class datos_estudiantes{
    public $nombre_estudiante;
    public $edad_estudiante;
    public $grado_estudio_actual;
    private $Documento_Identidad;
    private $nombre_acudiente;
    function __construct($nombre,$edad,$grado,$D_I,$acudiente){
        $this->nombre_estudiante= $nombre;
        $this->edad_estudiante=$edad;
        $this->grado_estudio_actual=$grado;
        $this->Documento_Identidad=$D_I;
        $this->nombre_acudiente=$acudiente;

    }
    public function mostrar_datos_estudiante(){
        echo "el nombre del estudiante es: ".$this->nombre_estudiante."<br>";
        echo"la edad del estudiante es: ".$this->edad_estudiante."<br>";
        echo"el grado actual del estudiante es: ".$this->grado_estudio_actual."<br>";
    }

    public function ensenar_datos_privador(){
        echo "el numero de documento de identidad es: ".$this->Documento_Identidad."<br>";
        echo "el nombre del acudiente es: ".$this->nombre_acudiente."<br>";
    } 
}

?>