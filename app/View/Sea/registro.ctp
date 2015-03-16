<?php //echo $this->Session->flash('auth'); ?>
<table border='0'>
    <tr bgcolor='#FFFFFF'><th>Registro de Usuario</th></tr>
    <tr>
        <?php echo $this->Form->create('Usuario', array('url' => array('controller' => 'sea', 'action' => 'guardar'))); ?>
        <td><?php echo $this->Form->input('nombres',array('label' => 'Nombres', 'required' => True)); ?></td>
    </tr>
    <tr>
        <td><?php echo $this->Form->input('apellidos', array('label' => 'Apellidos', 'required' => True)); ?></td>
    </tr>
    <tr>
        <td><?php echo $this->Form->input('usuario',array('label' => 'Usuario', 'required' => True)); ?></td>
    </tr>
    <tr>
        <td><?php echo $this->Form->input('password', array('type' => 'password', 'label' => 'Contraseña', 'required' => True)); ?></td>
    </tr>
    <tr>
        <td><?php echo $this->Form->input('password2', array('type' => 'password', 'label' => 'Repita la Contraseña', 'required' => True)); ?></td>
    </tr>
    <tr>
        <td><?php echo $this->Form->input('pregunta_s', array('label' => 'Pregunta Secreta', 'required' => True)); ?></td>
    </tr>
    <tr>
        <td><?php echo $this->Form->input('respuesta_s', array('label' => 'Respuesta Secreta', 'required' => True)); ?></td>
    </tr>
    <tr>
        <td align="center"><?php echo $this->Form->button('Enviar', array('type' => 'submit', 'id' => array('class' => 'boton'))); ?>
        <?php echo $this->Form->end(); ?>
        <?php //echo $this->Form->button('Cancelar', array('type' => 'reset', 'id' => array('class' => 'boton'))); ?>
        <?php $url = $this->Html->url(array('controller' => 'Sea', 'action' => 'index'));
        echo $this->Form->button('Cancelar', array('onclick' => "location.href='".$url."'", 'id' => array('class' => 'boton'))); ?></td>
        
    </tr>
</table>