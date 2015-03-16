<script>
j$(function() {
j$('#slideShow').cycle({ fx: 'fade' });
j$('#slideShow2').cycle({ fx: 'fade' });
});
</script>

<?php
//echo $this->Session->flash('auth');
//echo $this->Html->css('style',array('inline' => false));
echo "<table border='0'>";
    echo "<tr bgcolor='#FFFFFF'><th>INGRESO</th></tr>";
    echo "<tr>";
        echo "<td width='25%'>";
        //echo "<td width='25%'>".$this->element('login')."</td>";
        echo $this->Form->create('login', array('url' => array('controller' => 'Sea', 'action' => 'login')));
        echo $this->Form->input('usuario',array('label' => $this->Html->image('User.png', array('alt' => 'Usuario', 'width' => '25')).'Usuario'));
        echo $this->Form->input('clave', array('type' => 'password', 'label' => $this->Html->image('Pass.png', array('alt' => 'Password', 'width' => '25')).'Contraseña'));
        echo $this->Form->button('Enviar', array('type' => 'submit', 'id' => array('class' => 'boton')));
        echo $this->Form->button('Cancelar', array('type' => 'reset', 'id' => array('class' => 'boton')));
        echo $this->Form->end();
        echo "<br>";
        echo $this->Html->link('Registrate!', array('controller'=>'Sea', 'action'=>'registro'));
        echo "</td>";
        echo "<td align='center'>".
        "<div id='slideShow'>".
        $this->Html->image('slideshow/escuela_01.jpg',array('alt' => 'Escuela 01', 'title' => 'Escuela', 'width' => '330', 'height' => '260')).
        $this->Html->image('slideshow/escuela_02.jpg',array('alt' => 'Escuela 02', 'title' => 'Escuela', 'width' => '330', 'height' => '260')).
        $this->Html->image('slideshow/escuela_03.jpg',array('alt' => 'Escuela 03', 'title' => 'Escuela', 'width' => '330', 'height' => '260')).
        $this->Html->image('slideshow/escuela_04.jpg',array('alt' => 'Escuela 04', 'title' => 'Escuela', 'width' => '330', 'height' => '260')).
        $this->Html->image('slideshow/escuela_05.jpg',array('alt' => 'Escuela 05', 'title' => 'Escuela', 'width' => '330', 'height' => '260')).
        "</div>".
        "</td>".
        "<td align='center'>".
        "<div id='slideShow2'>".
        $this->Html->image('slideshow/liceo_01.jpg',array('alt' => 'Liceo 01', 'title' => 'Liceo', 'width' => '330', 'height' => '260')).
        $this->Html->image('slideshow/liceo_02.jpg',array('alt' => 'Liceo 02', 'title' => 'Liceo', 'width' => '330', 'height' => '260')).
        $this->Html->image('slideshow/liceo_03.jpg',array('alt' => 'Liceo 03', 'title' => 'Liceo', 'width' => '330', 'height' => '260')).
        $this->Html->image('slideshow/liceo_04.jpg',array('alt' => 'Liceo 04', 'title' => 'Liceo', 'width' => '330', 'height' => '260')).
        $this->Html->image('slideshow/liceo_05.jpg',array('alt' => 'Liceo 05', 'title' => 'Liceo', 'width' => '330', 'height' => '260')).
        "</div>".
        "</td>";
    echo "</tr>";
echo "</table>";
