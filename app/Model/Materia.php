<?php

class Materia extends Model {
    var $name = 'Materia';
    var $useTable = 'materia';
    var $primaryKey = 'id';
    var $hasMany = array(
        'EstudianteMateria' => array(
                'className' => 'EstudianteMateria',
                'foreignKey' => 'id_mat',
                'dependent' => false,
            )
        );

}
