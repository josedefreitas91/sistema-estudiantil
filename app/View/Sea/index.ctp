<script>
$(function() {
$('#slideShow').cycle({ fx: 'fade' });
$('#slideShow2').cycle({ fx: 'fade' });
});
</script>

<?php
//echo $this->Html->css('style',array('inline' => false));
echo "<table border='0'>";
    echo "<tr bgcolor='#FFFFFF'><th>INGRESO</th></tr>";
    echo "<tr>";
        echo "<td width='25%'>".$this->element('login')."</td>";
        echo "<td align='center'>".
        "<div id='slideShow'>".
        $this->Html->image('slideshow/escuela_01.jpg',array('alt' => 'Escuela 01', 'title' => 'Escuela', 'width' => '350', 'height' => '280')).
        $this->Html->image('slideshow/escuela_02.jpg',array('alt' => 'Escuela 02', 'title' => 'Escuela', 'width' => '350', 'height' => '280')).
        $this->Html->image('slideshow/escuela_03.jpg',array('alt' => 'Escuela 03', 'title' => 'Escuela', 'width' => '350', 'height' => '280')).
        $this->Html->image('slideshow/escuela_04.jpg',array('alt' => 'Escuela 04', 'title' => 'Escuela', 'width' => '350', 'height' => '280')).
        $this->Html->image('slideshow/escuela_05.jpg',array('alt' => 'Escuela 05', 'title' => 'Escuela', 'width' => '350', 'height' => '280')).
        "</div>".
        "</td>".
        "<td align='center'>".
        "<div id='slideShow2'>".
        $this->Html->image('slideshow/liceo_01.jpg',array('alt' => 'Liceo 01', 'title' => 'Liceo', 'width' => '350', 'height' => '280')).
        $this->Html->image('slideshow/liceo_02.jpg',array('alt' => 'Liceo 02', 'title' => 'Liceo', 'width' => '350', 'height' => '280')).
        $this->Html->image('slideshow/liceo_03.jpg',array('alt' => 'Liceo 03', 'title' => 'Liceo', 'width' => '350', 'height' => '280')).
        $this->Html->image('slideshow/liceo_04.jpg',array('alt' => 'Liceo 04', 'title' => 'Liceo', 'width' => '350', 'height' => '280')).
        $this->Html->image('slideshow/liceo_05.jpg',array('alt' => 'Liceo 05', 'title' => 'Liceo', 'width' => '350', 'height' => '280')).
        "</div>".
        "</td>";
    echo "</tr>";
echo "</table>";
