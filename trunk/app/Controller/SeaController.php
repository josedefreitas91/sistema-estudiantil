<?php

class SeaController extends AppController {
    //var $name = 'Sea';
    public $helpers = array('Html', 'Form');
    public $uses = array('Usuario');
    //public $components = array('Session', 'RequestHandler');
    
    public function index() {
        $this->set('title_for_layout', '.::Sea - La Victoria::.');
        //$this->layout='login';
    }
    
    public function registro() {
        $this->set('title_for_layout', '.::Registro Usuario - Sea::.');
        //$this->set('usuario',$this->Usuario->find('all'));
    }
    
    public function logueo() {
        //$a=$this->request->data;
    }
    
    public function guardar() {
        $datos = $this->request->data;
        $datos['Usuario']['nombres'] = ucwords($this->request->data['Usuario']['nombres']);
        $datos['Usuario']['apellidos'] = ucwords($this->request->data['Usuario']['apellidos']);
        $datos['Usuario']['pregunta_s'] = ucwords($this->request->data['Usuario']['pregunta_s']);
        $datos['Usuario']['password'] = md5($this->request->data['Usuario']['password']);
        $datos['Usuario']['online'] = 0;
        $datos['Usuario']['nivel'] = 1;
        $datos['Usuario']['estatus'] = 1;

        if ($this->Usuario->save($datos)){
            $this->Session->setFlash('Registro Guardado!');
            $this->redirect(array('action' => 'index'));
        }else{
            $this->render('registro');
        }
        $this->autoRender=false;
    }
}
