<?php 

    $array1 = array(
        array('Nombre',  'Apellido', 'Edad'),
        array('Carlos', 'Granada', 32),
        array('Juan', 'Martinez', 31),
        array('Maria', 'Correa', 22),
                  );

    echo "<table border=\"3\">";
    foreach($array1 as $value){
        echo "<tr>";

        foreach($value as $i){
            echo "<td>";
            print_r($i);
            echo "</td>";            
        }
        echo "</tr>";
    }
    
    echo "</table>";
