<?php

require("Ejemplo_POO_Aplication.php");

class estudiante extends datos_estudiantes{
    public function mostrar_datos_generales(){
        echo "se estan mostrando los datos generales: <br>";
        $this->mostrar_datos_estudiante();
    }

    public function datos_contacto_acudiente(){
        echo "datos de contacto acudiente";
        $this->ensenar_datos_privador();
    }

}

$estudiante_1 = new estudiante("Jose Perez",15,"Noveno",22612360,"Rosa Parra");
$estudiante_1->mostrar_datos_generales();
$estudiante_1->datos_contacto_acudiente();
?>