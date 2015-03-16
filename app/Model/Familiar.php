<?php

class Familiar extends Model {
    var $name = 'Familiar';
    var $useTable = 'familiar';
    var $primaryKey = 'id';
    var $belongsTo = array(
		'Estudiante' => array(
			'className' => 'Estudiante',
			'foreignKey' => 'id_estud',
		)
	);

}
