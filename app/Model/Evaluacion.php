<?php

class Evaluacion extends Model {
    var $name = 'Evaluacion';
    var $useTable = 'evaluacion';
    var $primaryKey = 'id';
    var $hasMany = array(
        'EstudianteEvaluacion' => array(
                'className' => 'EstudianteEvaluacion',
                'foreignKey' => 'id_eval',
                'dependent' => false,
            )
        );
    #var $belongsTo = 'Estudiante';
}
