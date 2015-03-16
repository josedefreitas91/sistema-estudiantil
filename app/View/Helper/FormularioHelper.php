<?php

class FormularioHelper extends AppHelper {

    //var $helpers = array('Html', 'Javascript', 'Form', 'Session');
    
    function edad($fecha_nac = null) {
        $hoy = date("Y-m-d");
        $edad = $hoy - $fecha_nac;
        return $edad;
    }
    
    function mesletra($mesNumero = null) {
        $meses = array(
                '01' => 'enero',
                '02' => 'febrero',
                '03' => 'marzo',
                '04' => 'abril',
                '05' => 'mayo',
                '06' => 'junio',
                '07' => 'julio',
                '08' => 'agosto',
                '09' => 'septiembre',
                '10' => 'octubre',
                '11' => 'noviembre',
                '12' => 'diciembre'
                );
        
        for($i=0; $i<count($meses); $i++){
            $valor = $meses[$mesNumero];
        }

        return $valor;
    }
    
}
