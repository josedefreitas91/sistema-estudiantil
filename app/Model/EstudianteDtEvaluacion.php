<?php

class EstudianteDtEvaluacion extends Model {
    var $name = 'EstudianteDtEvaluacion';
    var $useTable = 'estudiante_dt_evaluacion';
    var $primaryKey = 'id';
    var $belongsTo = array(
		'Estudiante' => array(
			'className' => 'Estudiante',
			'foreignKey' => 'id_est',
		),
		'DtEvaluacion' => array(
			'className' => 'DtEvaluacion',
			'foreignKey' => 'id_dt_eval',
		)
	);
    //var $useDbConfig = 'seguridad';
    
    
}