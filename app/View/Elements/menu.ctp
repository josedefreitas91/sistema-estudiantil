<?php

echo "<ul id='menu' class=menu>";
    echo "<li><a href='#' title=''>Auditoria</a>";
        echo "<ul>";
            echo "<li class='cat-item cat-item-4'>";
                echo $this->Html->link('Registro', array('controller'=>'Sea', 'action'=>'registro'));
            echo "</li>";
        echo "</ul>";
    echo "<li><a href='#' title=''>Escuela</a>";
        echo "<ul>";
            echo "<li class='cat-item cat-item-4'>";
                echo $this->Html->link('Inicio', array('controller'=>'Escuela', 'action'=>'index'));
            echo "</li>";
            echo "<li class='cat-item cat-item-4'>";
                echo $this->Html->link('Nuevo', array('controller'=>'Escuela', 'action'=>'nuevo'));
            echo "</li>";
        echo "</ul>";
    echo "<li><a href='#' title='Volver al menu principal'>Principal</a>";
        echo "<ul>";
            echo "<li class='cat-item cat-item-4'>";
                echo $this->Html->link('Volver!', array('controller'=>'Sea', 'action'=>'index'));
            echo "</li>";
        echo "</ul>";
echo "</ul>";