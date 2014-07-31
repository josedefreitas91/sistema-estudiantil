<?php

class AsistenciaEstudiante extends Model {
    var $name = 'AsistenciaEstudiante';
    var $useTable = 'asistencia_estudiante';
    var $primaryKey = 'id';
    var $belongsTo = 'Estudiante';
}
