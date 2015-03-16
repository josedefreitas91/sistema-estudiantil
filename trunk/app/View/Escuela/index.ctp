<div class="titulo">NOTICIAS</div>

<div class="titulo2">Hoy</div>

<div id="cuerpo">
    <?php
    if(!empty($cumpleHoy) && isset($cumpleHoy)){
        echo "<table border='0' style='width:80%;margin:auto'>";
            echo "<tr>";
                echo "<th width='50%'>Nombre</th>";
                echo "<th width='35%'>Cargo</th>";
                echo "<th width='10%'>Turno</th>";
                echo "<th width='5%'>Edad</th>";
            echo "</tr>";

            foreach ($cumpleHoy as $key) {
                echo "<tr>";
                    echo "<td>".$key['Personal']['nombres']." ".$key['Personal']['apellidos']."</td>";
                    echo "<td>".$key['Personal']['cargo']."</td>";
                    echo "<td>".$key['Personal']['turno']."</td>";
                    echo "<td>".$this->Formulario->edad($key['Personal']['fecha_nac'])."</td>";
                echo "</tr>";
            }
        echo "</table>";
    }else{
        echo "<h1>Hoy no hay cumplea&ntilde;eros!</h1>";
    } ?>

<br><div align="center"><h3>Mes de <?php echo ucwords($this->Formulario->mesletra(date('m'))); ?></h3></div>

    <?php
    if(!empty($cumpleMes) && isset($cumpleMes)){
        echo "<table border='0' style='width:80%;margin:auto'>";
            echo "<tr>";
                echo "<th width='15%'>Cumplea&ntilde;os (D&iacute;a)</th>";
                echo "<th width='35%'>Nombre</th>";
                //echo "<th width='30%'>Cargo</th>";
                echo "<th width='10%'>Turno</th>";
            echo "</tr>";

            foreach ($cumpleMes as $key) {
                echo "<tr>";
                    echo "<td align=center>".$key['0']['dia']."</td>";
                    echo "<td>".$key['Personal']['nombres']." ".$key['Personal']['apellidos']."</td>";
                    //echo "<td>".$key['Personal']['cargo']."</td>";
                    echo "<td>".$key['Personal']['turno']."</td>";
                echo "</tr>";
            }
        echo "</table>";
    }else{
        echo "<h1>Sin noticias</h1>";
    } ?>

</div>