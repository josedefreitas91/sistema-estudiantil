<?php

class SeaController extends AppController {
    public $name = 'Sea';
    public $helpers = array('Html', 'Form');
    public $uses = array('Usuario');
    //public $components = array('Auth');
    
    public function beforeFilter(){
        //parent::beforeFilter();
        //$this->Auth->userModel = 'Usuario';
        //$this->Auth->allow('index','registro'); permiso por funcion
    }
    
    /*public function login() {
        pr($this->request); die();
        if($this->request->is('post')){
            if($this->Auth->login()){
                $this->redirect($this->Auth->redirect());
            }else{
                $this->Session->setFlash('Usuario o contraseña incorrecta');
            }
        }
    }*/
    
    /*public function logout() {
        $this->Session->destroy();
        $this->redirect($this->Auth->logout());
    }*/


    public function index() {
        $this->set('title_for_layout', '.::Sea - La Victoria::.');
        //$this->layout='login';
    }
    
    public function registro() {
        $this->set('title_for_layout', '.::Registro Usuario - Sea::.');
        //$this->set('usuario',$this->Usuario->find('all'));
    }
    
    /*public function logueo() {
       /* pr($this->request->data);
        die();/
        if ($this->request->is('post')) {
            /* login and redirect to url set in app controller /
            if ($this->Auth->login()) {
                return $this->redirect($this->Auth->redirect());
            }
            $this->Session->setFlash('Usuario o contraseña invalido, intente de nuevo');
        }
        //$this->render('index');
    }*/
    
    public function guardar() {
        $datos = $this->request->data;
        $datos['Usuario']['nombres'] = ucwords($this->request->data['Usuario']['nombres']);
        $datos['Usuario']['apellidos'] = ucwords($this->request->data['Usuario']['apellidos']);
        if(md5($this->request->data['Usuario']['password']) == md5($this->request->data['Usuario']['password2'])){
            $datos['Usuario']['password'] = md5($this->request->data['Usuario']['password']);
        }else{
            $this->Session->setFlash('Las contraseñas no son iguales');
        }
        $datos['Usuario']['pregunta_s'] = ucwords($this->request->data['Usuario']['pregunta_s']);
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
