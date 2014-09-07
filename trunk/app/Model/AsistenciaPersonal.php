<?php

class AsistenciaPersonal extends Model {
    var $name = 'AsistenciaPersonal';
    var $useTable = 'asistencia_personal';
    var $primaryKey = 'id';
    var $belongsTo = array(
        'Personal' => array(
            'className'    => 'Personal',
            'foreignKey'   => 'id_p'
        )
    );
    //var $useDbConfig = 'seguridad';
    
    
}