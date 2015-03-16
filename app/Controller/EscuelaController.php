<?php

class EscuelaController extends AppController {
    public $name = 'Escuela';
    public $helpers = array('Html', 'Form', 'Js' => array('Jquery'), 'Formulario');
    public $uses = array('Usuario', 'Personal', 'Familiar');
    //public $components = array('Maestro'); //Auth
    
    public function beforeFilter(){
        //parent::beforeFilter();
        //$this->Auth->userModel = 'Usuario';
        //$this->Auth->allow('index','registro'); permiso por funcion
    }
    
    public function index() {
        $this->set('title_for_layout', '.::Escuela - Sea::.');

        $cumpleHoy = $this->Personal->find('all', array("fields" => array("nombres", "apellidos", "fecha_nac", "cargo", "turno"), "conditions" => array("TO_CHAR(fecha_nac,'DD-MM')" => date('d-m')), "order" => "apellidos"));
        $cumpleMes = $this->Personal->find('all', array("fields" => array("nombres", "apellidos", "TO_CHAR(fecha_nac,'DD') AS dia", "cargo", "turno"), "conditions" => array("TO_CHAR(fecha_nac,'MM')" => date('m'), 'NOT' => array("TO_CHAR(fecha_nac,'DD-MM')" => date('d-m'))), "order" => "fecha_nac"));
        $this->set('cumpleHoy', $cumpleHoy);
        $this->set('cumpleMes', $cumpleMes);
        //pr($cumples);
        //$this->layout='login';
    }
    
    public function nuevo() {
        //$this->set('title_for_layout', '.::Escuela - Sea::.');
    }
}