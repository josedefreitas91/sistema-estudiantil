<?php

class Estudiante extends Model {
    var $name = 'Estudiante';
    var $useTable = 'estudiante';
    var $primaryKey = 'id';
    var $hasMany = array(
        'AsistenciaEstudiante',
        'EstudianteDtEvaluacion' => array(
                'className' => 'EstudianteDtEvaluacion',
                'foreignKey' => 'id_est',
                'dependent' => false,
            ),
        'EstudianteEvaluacion' => array(
                'className' => 'EstudianteEvaluacion',
                'foreignKey' => 'id_est',
                'dependent' => false,
            ),
        
        'EstudianteMateria' => array(
                'className' => 'EstudianteMateria',
                'foreignKey' => 'id_est',
                'dependent' => false,
            )
        );
    #var $belongsTo = 'Estudiante';
}
