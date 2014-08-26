<?php

class SeaController extends AppController {
    //var $name = 'Sea';
    public $helpers = array('Html', 'Form');
    public $uses = array('Usuario');
    //public $components = array('Session', 'RequestHandler');
    
    public function index() {
        $this->set('title_for_layout', 'Sea - La Victoria');
        //$this->layout='login';
    }
    
    public function registro() {
        //$this->set('usuario',$this->Usuario->find('all'));
    }
    
    public function logueo() {
        //$a=$this->request->data;
    }
    
    public function guardar() {
        //$this->request->data['Modelo']['campo'] = valor;
        $datos = $this->request->data;
        $datos['Usuario']['nombres'] = ucwords($this->request->data['Usuario']['nombres']);
        $datos['Usuario']['apellidos'] = ucwords($this->request->data['Usuario']['apellidos']);
        $datos['Usuario']['pregunta_s'] = ucwords($this->request->data['Usuario']['pregunta_s']);
        $datos['Usuario']['online'] = 0;
        $datos['Usuario']['nivel'] = 1;
        $datos['Usuario']['estatus'] = 1;
        //pr($datos);
        //die();
        if ($this->Usuario->save($datos)){
            $this->Session->setFlash('Registro Guardado!');
            $this->redirect(array('action' => 'index'));
        }else{
            $this->Session->setFlash('No se puede guardar');
            //$this->redirect(array('action' => 'index'));
        }
        $this->autoRender=false;
    }
}
