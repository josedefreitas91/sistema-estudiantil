<?php

class Documentos extends Model {
    var $name = 'Documentos';
    var $useTable = 'documentos';
    var $primaryKey = 'id';
    var $belongsTo = array(
        'Estudiante' => array(
            'className'    => 'Estudiante',
            'foreignKey'   => 'id_est'
        )
    );
    //var $useDbConfig = 'seguridad';
    
    
}