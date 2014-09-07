<?php

class Inscripcion extends Model {
    var $name = 'Inscripcion';
    var $useTable = 'inscripcion';
    var $primaryKey = 'id';
    var $belongsTo = array(
		'Estudiante' => array(
			'className' => 'Estudiante',
			'foreignKey' => 'id_est',
		)
	);

}
