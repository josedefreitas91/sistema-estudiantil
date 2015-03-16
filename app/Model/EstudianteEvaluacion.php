<?php

class EstudianteEvaluacion extends Model {
    var $name = 'EstudianteEvaluacion';
    var $useTable = 'estudiante_evaluacion';
    var $primaryKey = 'id';
    var $belongsTo = array(
		'Estudiante' => array(
			'className' => 'Estudiante',
			'foreignKey' => 'id_est',
		),
		'Evaluacion' => array(
			'className' => 'Evaluacion',
			'foreignKey' => 'id_eval',
		)
	);
    //var $useDbConfig = 'seguridad';
    
    
}