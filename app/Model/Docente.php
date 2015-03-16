<?php

class Docente extends Model {
    var $name = 'Docente';
    var $useTable = 'docente';
    var $primaryKey = 'id';
    var $belongsTo = array(
        'Personal' => array(
            'className'    => 'Personal',
            'foreignKey'   => 'id_p'
        )
    );
    //var $useDbConfig = 'seguridad';
    
    
}