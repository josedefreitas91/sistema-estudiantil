<?php

class EscuelaController extends AppController {
    public $name = 'Escuela';
    public $helpers = array('Html', 'Form', 'Js' => array('Jquery'));
    public $uses = array('Usuario');
    //public $components = array('Auth');
    
    public function beforeFilter(){
        //parent::beforeFilter();
        //$this->Auth->userModel = 'Usuario';
        //$this->Auth->allow('index','registro'); permiso por funcion
    }
    
    public function index() {
        $this->set('title_for_layout', '.::Escuela - Sea::.');
        //$this->layout='login';
    }
    
    public function nuevo() {
        //$this->set('title_for_layout', '.::Escuela - Sea::.');
    }
}