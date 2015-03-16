<?php

class Usuario extends Model {
    var $name = 'Usuario';
    var $useTable = 'usuario';
    var $primaryKey = 'id';
    var $useDbConfig = 'seguridad';
    
    public $validate = array(
        'usuario' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'message' => 'Este campo no puede estar vacio!',
            ),
            'min' => array(
                'rule'    => array('minLength', '8'),
                'message' => 'Debe contener minimo 8 caracteres'
            ),
            'Unico' => array(
                'rule' => 'isUnique',
                'required' => true,
                'allowEmpty' => false,
                'on' => 'create', // here
                'last' => false,
                'message' => 'Nombre de usuario ya existe!'
            )
        ),
        'password' => array(
            'alphaNumeric' => array(
                'rule'     => 'alphaNumeric',
                'required' => true,
                'message'  => 'Debe contener letras y numeros'
            ),
            'rule'    => array('minLength', '8'),
            'message' => 'Debe contener minimo 8 caracteres'
        ),
        /*'email' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'message' => 'Este campo no puede estar vacio!',
            ),
            'email' => array(
                'rule'    => array('email', true),
                'message' => 'Por favor ingrese un correo valido.'
            ),
         ),*/
        'nombres' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'message' => 'Este campo no puede estar vacio!',
            ),
            'min' => array(
                'rule'    => array('minLength', '3'),
                'message' => 'El nombre debe contener minimo 3 caracteres'
            )
        ),
        'apellidos' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'message' => 'Este campo no puede estar vacio!',
            ),
            'min' => array(
                'rule'    => array('minLength', '3'),
                'message' => 'El nombre debe contener minimo 3 caracteres'
            )
        ),
        'pregunta_s' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'message' => 'Este campo no puede estar vacio!',
            )
        ),
        'respuesta_s' => array(
            'notEmpty' => array(
                'rule' => 'notEmpty',
                'required' => true,
                'message' => 'Este campo no puede estar vacio!',
            )
        )
        
    );
    
}