<?php

class AspectoVivienda extends Model {
    var $name = 'AspectoVivienda';
    var $useTable = 'aspecto_vivienda';
    var $primaryKey = 'id';
    var $belongsTo = array(
        'Estudiante' => array(
            'className'    => 'Estudiante',
            'foreignKey'   => 'id_est'
        )
    );
    //var $useDbConfig = 'seguridad';
    
    
}