<?php

class DtEvaluacion extends Model {
    var $name = 'DtEvaluacion';
    var $useTable = 'dt_evaluacion';
    var $primaryKey = 'id';
    var $belongsTo = array(
        'Evaluacion' => array(
            'className'    => 'Evaluacion',
            'foreignKey'   => 'id_eval'
        )
    );
    var $hasMany = array(
        'EstudianteDtEvaluacion' => array(
                'className' => 'EstudianteDtEvaluacion',
                'foreignKey' => 'id_dt_eval',
                'dependent' => false,
            )
        );
    //var $useDbConfig = 'seguridad';
    
    
}