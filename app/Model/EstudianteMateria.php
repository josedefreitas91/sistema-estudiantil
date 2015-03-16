<?php

class EstudianteMateria extends Model {
    var $name = 'EstudianteMateria';
    var $useTable = 'estudiante_materia';
    var $primaryKey = 'id';
    var $belongsTo = array(
		'Estudiante' => array(
			'className' => 'Estudiante',
			'foreignKey' => 'id_est',
		),
		'Materia' => array(
			'className' => 'Materia',
			'foreignKey' => 'id_mat',
		)
	);
    //var $useDbConfig = 'seguridad';
    
    
}