<?php

class ProfMateria extends Model {
    var $name = 'ProfMateria';
    var $useTable = 'prof_materia';
    var $primaryKey = 'id';
    var $belongsTo = array(
		'Personal' => array(
			'className' => 'Personal',
			'foreignKey' => 'id_p',
		)
	);

}
