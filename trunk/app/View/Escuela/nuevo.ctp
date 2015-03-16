<script>
j$(document).ready(function() {
    j$(".tab_content").hide(); //Hide all content
    j$("ul.tabs li:first").addClass("active").show(); //Activate first tab
    j$(".tab_content:first").show(); //Show first tab content

    j$("ul.tabs li").click(function() {
        j$("ul.tabs li").removeClass("active"); //Remove any "active" class
        j$(this).addClass("active"); //Add "active" class to selected tab
        j$(".tab_content").hide(); //Hide all tab content

        var activeTab = j$(this).find("a").attr("href"); //Find the href attribute value to identify the active tab + content
        j$(activeTab).fadeIn(); //Fade in the active ID content
        return false;
    });
});
</script>

<div class="titulo">INSCRIPCION</div>

<div class="titulo2">Estudiante Nuevo</div>

<div id="cuerpo">
    <ul class="tabs">
        <li><a href="#tab1" title='Grupo Familiar'>Grupo Fam.</a></li>
        <li><a href="#tab2" title='Estudiante'>Estud.</a></li>
        <li><a href="#tab3" title='Aspectos de la vivienda'>Aspect. Viv.</a></li>
        <li><a href="#tab4" title='Antecedentes del estudiante'>Antec. Estud.</a></li>
        <li><a href="#tab5" title='Conducta emocional'>Cond. Emoc.</a></li>
        <li><a href="#tab6" title='Documentos asignados'>Doc. Asig.</a></li>
        <li><a href="#tab7" title='Grado a cursar'>Grado</a></li>
    </ul>

<br>
    <div id="tab1" class="tab_content">
        <table border='1'>
            <tr><th>Representante</th></tr>
            <tr>
                <?php //echo $this->Form->create('Representante', array('url' => array('controller' => 'Escuela', 'action' => 'guardar_nuevo'))); ?>                
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
                <td align="center">                
                <?php //echo $this->Form->button('Enviar', array('type' => 'submit', 'id' => array('class' => 'boton'))); ?>
                <?php //echo $this->Form->end(); ?>
                <?php //echo $this->Form->button('Cancelar', array('type' => 'reset', 'id' => array('class' => 'boton'))); ?>
                <?php $url = $this->Html->url(array('controller' => 'Sea', 'action' => 'index'));
                //echo $this->Form->button('Cancelar', array('onclick' => "location.href='".$url."'", 'id' => array('class' => 'boton'))); ?>
                </td>
            </tr>
        </table>
    </div>

    <div id="tab2" class="tab_content">
            texto 2
    </div>

    <div id="tab3" class="tab_content">
            texto 3
    </div>

    <div id="tab4" class="tab_content">
            texto 4
    </div>

    <div id="tab5" class="tab_content">
            texto 5
    </div>

    <div id="tab6" class="tab_content">
            texto 6
    </div>

    <div id="tab7" class="tab_content">
            texto 7
    </div>

</div>