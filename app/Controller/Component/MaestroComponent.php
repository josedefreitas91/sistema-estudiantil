<?php

class MaestroComponent extends Component {

    public function edad($fecha_nac = null) {
        $hoy = date("Y-m-d");
        $edad = $hoy - $fecha_nac;
        return $edad;
    }
    
    /*public function modelo($config = 'punto', $modelo = null, $t = null) {
        if (empty($t))
            $t = 'punto_T001';
        App::import('Model', $modelo);
        $obj = new $modelo(false, null, null, $config, $t, $modelo);
        return $obj;
    }*/


}
