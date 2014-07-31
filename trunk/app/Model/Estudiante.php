<?php

class Estudiante extends Model {
    var $name = 'Estudiante';
    var $useTable = 'estudiante';
    var $primaryKey = 'id';
    var $hasMany = 'AsistenciaEstudiante';
    #var $belongsTo = 'Estudiante';
}
