<?php

class EnfermedadesPadecidas extends Model {
    var $name = 'EnfermedadesPadecidas';
    var $useTable = 'enfermedades_padecidas';
    var $primaryKey = 'id';
    var $belongsTo = array(
        'Estudiante' => array(
            'className'    => 'Estudiante',
            'foreignKey'   => 'id_est'
        )
    );
    //var $useDbConfig = 'seguridad';
    
    
}