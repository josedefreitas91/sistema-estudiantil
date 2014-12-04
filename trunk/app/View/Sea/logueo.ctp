<?php
    echo $this->Session->flash('auth');
echo $this->Form->create('login', array('url' => array('controller' => 'Sea', 'action' => 'logueo')));
echo $this->Form->input('usuario',array('label' => $this->Html->image('User.png', array('alt' => 'Usuario', 'width' => '25')).'Usuario'));
echo $this->Form->input('clave', array('type' => 'password', 'label' => $this->Html->image('Pass.png', array('alt' => 'Password', 'width' => '25')).'Contraseña'));
echo $this->Form->button('Enviar', array('type' => 'submit', 'id' => array('class' => 'boton')));
echo $this->Form->button('Cancelar', array('type' => 'reset', 'id' => array('class' => 'boton')));
echo $this->Form->end();

?>