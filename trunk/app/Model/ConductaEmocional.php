<?php

class ConductaEmocional extends Model {
    var $name = 'ConductaEmocional';
    var $useTable = 'conducta_emocional';
    var $primaryKey = 'id';
    var $belongsTo = array(
        'Estudiante' => array(
            'className'    => 'Estudiante',
            'foreignKey'   => 'id_est'
        )
    );
    //var $useDbConfig = 'seguridad';
    
    
}